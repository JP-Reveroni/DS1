<?php 
require_once 'config.php';

// Se já estiver logado, redireciona
if (isset($_SESSION['usuario_logado'])) {
    header('Location: home.php');
    exit;
}

$erro = isset($_GET['erro']) ? $_GET['erro'] : '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h1>Bem-vindo(a)</h1>
            <p class="subtitle">Faça login para continuar</p>

            <?php if ($erro == '1'): ?>
                <div class="alert alert-error">
                     Usuário ou senha incorretos!
                </div>
            <?php endif; ?>

            <form action="processa_login.php" method="POST">
                <div class="form-group">
                    <label for="usuario">Usuário ou E-mail</label>
                    <input type="text" id="usuario" name="usuario" 
                           placeholder="Digite seu usuário ou e-mail" required>
                </div>

                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" 
                           placeholder="Digite sua senha" required>
                </div>

                <button type="submit" class="btn btn-primary">Entrar</button>

                <div class="link-recuperar">
                    <a href="recuperar.php">Esqueci a Senha</a>
                </div>
            </form>

            <div class="info-box">
                <strong> Para teste, use:</strong><br>
                Usuário: <code>admin</code> | Senha: <code>senha123</code><br>
                Ou: <code>joaopedroreverone@gmail.com</code> | Senha: <code>fatec2024</code>
            </div>
        </div>
    </div>
</body>
</html>