<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'Configurações do Sistema',
        'group' => 'Configurações',
    ],
    'tab' => [
        'application' => 'Aplicação',
        'mail' => 'E-mail',
        'security' => 'Segurança',
    ],
    'mail' => [
        'from_email' => 'E-mail do remetente',
        'from_name' => 'Nome do remetente',
        'host' => 'Host',
        'port' => 'Porta',
        'username' => 'Nome de usuário',
        'password' => 'Senha',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'Limite de tentativas de login',
        'login_attempts_lockout_window' => 'Janela de bloqueio',
        'login_attempts_lockout_attempts' => 'Tentativas de bloqueio',
        'login_attempts_lockout_duration' => 'Duração do bloqueio',
        'enable_login_captcha' => 'Ativar captcha de login',
    ],
];
