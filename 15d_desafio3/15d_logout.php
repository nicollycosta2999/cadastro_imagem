
<?php
// Inicia a sessão atual
session_start();

// Apaga os dados guardados na sessão
$_SESSION = [];

// Destrói a sessão
session_destroy();

// Redireciona para a página de login
header("Location: 15d_login.php");
exit;
?>
