<?php 
require_once 'config.php';

$sucesso = isset($_GET['sucesso']) ? $_GET['sucesso'] : '';
$erro = isset($_GET['erro']) ? $_GET['erro'] : '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h1>Recuperar Senha</h1>
            <p class="subtitle">Digite seu e-mail cadastrado</p>

            <?php if ($sucesso == '1'): ?>
                <div class="alert alert-success">
                    E-mail de recuperação enviado com sucesso!<br>
                    Verifique sua caixa de entrada.
                </div>
            <?php endif; ?>

            <?php if ($erro == '1'): ?>
                <div class="alert alert-error">
                     E-mail não encontrado no sistema!
                </div>
            <?php endif; ?>

            <form action="processa_recuperar.php" method="POST">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" 
                           placeholder="seu@email.com" required>
                </div>

                <button type="submit" class="btn btn-primary">Recuperar Senha</button>

                <div class="link-recuperar">
                    <a href="index.php">Voltar para o Login</a>
                </div>
            </form>

            <div class="info-box">
                <strong> E-mails válidos para teste:</strong><br>
                admin@sistema.com<br>
                joaopedroreverone@gmail.com<br>
            </div>
        </div>
    </div>
</body>
</html>