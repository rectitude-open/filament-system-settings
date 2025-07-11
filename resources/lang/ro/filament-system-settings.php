<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'Setări sistem',
        'group' => 'Setări',
    ],
    'tab' => [
        'application' => 'Aplicație',
        'mail' => 'E-mail',
        'security' => 'Securitate',
    ],
    'application' => [
        'site_name' => 'Nume site',
        'site_title' => 'Titlu site',
        'site_description' => 'Descriere site',
        'site_logo' => 'Logo site',
        'site_favicon' => 'Favicon site',
    ],
    'mail' => [
        'from_email' => 'E-mail expeditor',
        'from_name' => 'Nume expeditor',
        'host' => 'Gazdă',
        'port' => 'Port',
        'username' => 'Nume utilizator',
        'password' => 'Parolă',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'Limită încercări autentificare',
        'login_attempts_lockout_window' => 'Fereastră blocare',
        'login_attempts_lockout_attempts' => 'Număr încercări blocare',
        'login_attempts_lockout_duration' => 'Durată blocare',
        'enable_login_captcha' => 'Activează captcha la autentificare',
    ],
];
