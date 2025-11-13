<?php
require_once 'config.php';
require_once 'usuarios.php';
require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Recebe e-mail do formulário
$email = $_POST['email'] ?? '';

// Verifica se o e-mail é válido
if (in_array($email, $emails_validos)) {
    
    try {
        $mail = new PHPMailer(true);
        
        // Configurações SMTP
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USER;
        $mail->Password = SMTP_PASS;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = SMTP_PORT;
        $mail->CharSet = 'UTF-8';
        
        // Remetente e destinatário
        $mail->setFrom(EMAIL_FROM, EMAIL_NAME);
        $mail->addAddress($email);
        
        // Senha temporária
        $senha_temporaria = 'Fatec2025SI';
        
        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = 'Recuperação de Senha';
        $mail->Body = "
            <h2>Sua senha foi resetada</h2>
            <p>Sua senha foi resetada com sucesso.</p>
            <p><strong>Nova senha temporária:</strong> <code style='background: #f4f4f4; padding: 5px 10px; border-radius: 4px;'>{$senha_temporaria}</code></p>
            <hr>
            <p style='color: #666;'>Por segurança, altere sua senha após o primeiro acesso.</p>
            <p><a href='http://localhost/login-system/index.php' style='background: #4CAF50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px; display: inline-block;'>Fazer Login</a></p>
        ";
        
        $mail->send();
        
        // Redireciona com mensagem de sucesso
        header('Location: recuperar.php?sucesso=1');
        exit;
        
    } catch (Exception $e) {
        // Erro ao enviar e-mail
        error_log("Erro ao enviar e-mail de recuperação: {$mail->ErrorInfo}");
        header('Location: recuperar.php?erro=2');
        exit;
    }
    
} else {
    // E-mail não encontrado
    header('Location: recuperar.php?erro=1');
    exit;
}
?>