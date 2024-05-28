<?php
include('conexao.php');

// Inicia a sessão
session_start();

$error_message = '';

// Verifica se o usuário já está logado
if (isset($_SESSION['nome'])) {
    header('Location: home.php'); // Redireciona para home.php se o usuário já estiver logado
    exit();
}

// Verifica se o formulário de login foi submetido
if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);
    
    // Consulta para verificar as credenciais do usuário
    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do SQL:" . $mysqli->error);
    
    // Verifica se foi encontrado um usuário com as credenciais fornecidas
    if ($sql_query->num_rows == 1) {
        $usuario = $sql_query->fetch_assoc();
        
        // Define as informações do usuário na sessão
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['grupo'] = $usuario['grupo']; // Adiciona o grupo do usuário à sessão
        
        // Redireciona para a página inicial após o login bem-sucedido
        header('Location: home.php');
        exit();
    } else {
        $error_message = "Email ou senha incorretos";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
    <style>
    /* Estilo para o contêiner pai que será um flex container */
    .container {
        display: flex;
        justify-content: center; /* Centraliza os itens horizontalmente */
        align-items: center; /* Centraliza os itens verticalmente */
        height: 100vh; /* Ocupa toda a altura da viewport */
    }

    /* Estilo para o contêiner do vídeo */
    .video-container {
        width: 50%; /* 50% do espaço disponível para o vídeo */
        padding: 20px;
        box-sizing: border-box; /* Garante que o padding não aumente a largura do contêiner */
    }

    /* Estilo para o contêiner do formulário de login */
    .login-container {
        width: 50%; /* 50% do espaço disponível para o formulário de login */
        padding: 20%;
        box-sizing: border-box; /* Garante que o padding não aumente a largura do contêiner */
    }

    </style>


</head>
<body>
    <div class="video-container">
        <!-- Adicione o GIF aqui -->
        <img src="nglogin.gif" alt="Seu GIF">
    </div>

    <div class="login-container">
        <form action="" method="POST">
            <h1>Acesse sua conta</h1>
            
            <p>
                <label> E-mail</label>
                <input type="text" name="email">
            </p>
            <p>
                <label>Senha</label>
                <input type="password" name="senha">
            </p>
            <p>
                <button type="submit">Entrar</button>
            </p>
            <div class="error-message"><?php echo $error_message; ?></div>
        </form>
    </div>
</body>
</html>
