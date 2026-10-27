
<?php
// Inicia a sessão para guardar os dados do usuário
session_start();

// Faz a conexão com o banco de dados exercicio
$conexao = new mysqli("localhost", "root", "", "exercicio");

// Verifica se a conexão apresentou algum erro
if ($conexao->connect_error) {
    die("Erro ao conectar ao banco de dados!");
}

$erro = "";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recebe os dados digitados pelo usuário
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $cor = $_POST["cor"];

    // Procura o usuário na tabela usuarios
    $sql = "SELECT * FROM usuarios WHERE usuario = ?";
    $consulta = $conexao->prepare($sql);
    $consulta->bind_param("s", $usuario);
    $consulta->execute();

    // Guarda o resultado da consulta
    $resultado = $consulta->get_result();

    // Verifica se encontrou o usuário
    if ($resultado->num_rows > 0) {

        // Pega os dados encontrados no banco
        $dados = $resultado->fetch_assoc();

        // Confere se a senha está correta
        if ($senha == $dados["senha"]) {

            // Salva o usuário e a cor na sessão
            $_SESSION["usuario"] = $usuario;
            $_SESSION["cor"] = $cor;

            // Redireciona para a página de perfil
            header("Location: 15d_perfil.php");
            exit;

        } else {
            // Mensagem caso a senha esteja errada
            $erro = "Senha incorreta!";
        }

    } else {
        // Mensagem caso o usuário não exista
        $erro = "Usuário não encontrado!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login do Sistema</title>
</head>
<body>

    <h1>Login do Sistema</h1>

    <!-- Exibe uma mensagem caso os dados estejam incorretos -->
    <p><?php echo htmlspecialchars($erro); ?></p>

    <!-- Formulário para entrar no sistema -->
    <form method="POST">

        <label>Usuário:</label>
        <input type="text" name="usuario" required>

        <br><br>

        <label>Senha:</label>
        <input type="password" name="senha" required>

        <br><br>

        <label>Cor de fundo:</label>
        <input type="color" name="cor" value="#ffffff">

        <br><br>

        <button type="submit">Entrar</button>

    </form>

</body>
</html>
