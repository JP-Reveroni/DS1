<?php
require_once 'config.php';

// Destroi todas as variáveis de sessão
session_unset();
session_destroy();

// Redireciona para login
header('Location: index.php');
exit;
?>