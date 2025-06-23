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
    'application' => [
        'site_name' => 'Nome del sito',
        'site_url' => 'URL del sito',
        'site_title' => 'Titolo del sito',
        'site_description' => 'Descrizione del sito',
        'site_logo' => 'Logo del sito',
        'site_favicon' => 'Favicon del sito',
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
