<?php
require_once 'config.php';
require_once 'usuarios.php';
require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Recebe dados do formulário
$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

// Verifica se o usuário existe
if (isset($usuarios[$usuario])) {
    $dados_usuario = $usuarios[$usuario];
    
    // Verifica se a senha está correta
    if (password_verify($senha, $dados_usuario['senha'])) {
        
        // Login bem-sucedido - Cria sessão
        $_SESSION['usuario_logado'] = $usuario;
        $_SESSION['nome_usuario'] = $dados_usuario['nome'];
        
        //  Envia notificação de acesso
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
            $mail->addAddress(EMAIL_NOTIFICACAO);
            
            // Data e hora do acesso
            $data_hora = date('d/m/Y H:i:s');
            
            // Conteúdo do e-mail
            $mail->isHTML(true);
            $mail->Subject = 'Acesso bem-sucedido ao Sistema';
            $mail->Body = "
                <h2>Notificação de Acesso</h2>
                <p><strong>Usuário:</strong> {$dados_usuario['nome']} ({$usuario})</p>
                <p><strong>Data/Hora:</strong> {$data_hora}</p>
                <p><strong>IP:</strong> {$_SERVER['REMOTE_ADDR']}</p>
                <hr>
                <p style='color: #666;'>Esta é uma notificação automática do sistema.</p>
            ";
            
            $mail->send();
            
        } catch (Exception $e) {
            // Registra erro mas não impede o login
            error_log("Erro ao enviar e-mail de notificação: {$mail->ErrorInfo}");
        }
        
        // Redireciona para página restrita
        header('Location: home.php');
        exit;
        
    } else {
        // Senha incorreta
        header('Location: index.php?erro=1');
        exit;
    }
} else {
    // Usuário não encontrado
    header('Location: index.php?erro=1');
    exit;
}
?>