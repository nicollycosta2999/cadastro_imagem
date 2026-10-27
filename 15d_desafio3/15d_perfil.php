
<?php
// Inicia a sessão
session_start();

// Verifica se existe um usuário logado
if (!isset($_SESSION["usuario"])) {

    // Se não estiver logado, volta para o login
    header("Location: 15d_login.php");
    exit;
}

// Recupera o usuário e a cor salvos na sessão
$usuario = $_SESSION["usuario"];
$cor = $_SESSION["cor"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meu Perfil</title>
</head>

<!-- Coloca a cor escolhida como fundo da página -->
<body style="background-color: <?php echo htmlspecialchars($cor); ?>;">

    <!-- Mostra o nome do usuário que entrou -->
    <h1>Bem-vindo(a), <?php echo htmlspecialchars($usuario); ?>!</h1>

    <p>Você entrou no seu perfil com sucesso.</p>

    <!-- Link para encerrar a sessão -->
    <a href="15d_logout.php">Sair do sistema</a>

</body>
</html>
