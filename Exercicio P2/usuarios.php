<?php
// Usuários mockados com senhas criptografadas
$usuarios = [
    'admin' => [
        'senha' => password_hash('senha123', PASSWORD_DEFAULT),
        'email' => 'admin@sistema.com',
        'nome' => 'Administrador'
    ],
    'joaopedroreverone@gmail.com' => [
        'senha' => password_hash('fatec2024', PASSWORD_DEFAULT),
        'email' => 'joaopedroreverone@gmail.com',
        'nome' => 'João pedro'
    ]
];

// E-mails válidos para recuperação
$emails_validos = [
    'admin@sistema.com',
    'joaopedroreverone@gmail.com'
];
?>