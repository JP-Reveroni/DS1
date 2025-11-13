<?php
require_once 'config.php';

// Verifica se está logado
if (!isset($_SESSION['usuario_logado'])) {
    header('Location: index.php');
    exit;
}

$nome = $_SESSION['nome_usuario'];
$usuario = $_SESSION['usuario_logado'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Restrita</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="home-box">
            <div class="welcome-icon">✅</div>
            <h1>Área Restrita</h1>
            <p class="subtitle">Bem-vindo(a), <strong><?php echo htmlspecialchars($nome); ?></strong>!</p>
            
            <div class="info-card">
                <p><strong>Usuário:</strong> <?php echo htmlspecialchars($usuario); ?></p>
                <p><strong>Status:</strong> <span class="badge badge-success">Autenticado</span></p>
            </div>

            <a href="logout.php" class="btn btn-danger">Sair do Sistema</a>

            <div class="info-box" style="margin-top: 30px;">
                <strong>Informação:</strong><br>
                Um e-mail de notificação foi enviado para<br>
                <code>joaopedroreverone@gmail.com</code> informando seu acesso.
            </div>
        </div>
    </div>
</body>
</html>