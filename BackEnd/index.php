<?php
session_start();
include('conexao.php');

if(isset($_POST['usuario']) && isset($_POST['senha'])){

    $usuario = $conecta->real_escape_string($_POST['usuario']);
    $senha   = $_POST['senha']; // senha digitada

    // --- BYPASS DE LOGIN PARA TESTES (Substitua o bloco de autenticação por isto) ---

// Define as variáveis de sessão com os dados que foram submetidos
$_SESSION['usuario'] = $usuario;
$_SESSION['nome'] = "USUARIO DE TESTE"; // Nome fixo, ou defina como $usuario

// Redireciona imediatamente para a tela inicial
header("Location: ../FrontEnd/index.html"); // dashboard
exit;

// --- FIM DO BYPASS DE LOGIN ---
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login Panácea</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="StyleLogin.css">
</head>
<body>
    <h1>Panácea Software</h1>
    <img src="Panácea.png" alt="Logo Panácea" style="width:150px;height:150px;"><br><br>

    <?php if(isset($erro)) echo "<p style='color:red;'>$erro</p>"; ?>

    <form action="" method="POST">
        <input type="text" name="usuario" placeholder="Nome de usuário" required><br><br>
        <input type="password" name="senha" placeholder="Senha" required><br><br>
        <button type="submit">Entrar</button>
    </form>

    <button onclick="window.location.href='formulario.php'">Cadastrar</button><br><br>
</body>
</html>
