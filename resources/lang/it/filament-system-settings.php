<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'Impostazioni di sistema',
        'group' => 'Impostazioni',
    ],
    'tab' => [
        'application' => 'Applicazione',
        'mail' => 'Posta',
        'security' => 'Sicurezza',
    ],
    'mail' => [
        'from_email' => 'Email mittente',
        'from_name' => 'Nome mittente',
        'host' => 'Host',
        'port' => 'Porta',
        'username' => 'Nome utente',
        'password' => 'Password',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'Limite tentativi di accesso',
        'login_attempts_lockout_window' => 'Finestra di blocco',
        'login_attempts_lockout_attempts' => 'Tentativi di blocco',
        'login_attempts_lockout_duration' => 'Durata blocco',
        'enable_login_captcha' => 'Abilita captcha di accesso',
    ],
];
