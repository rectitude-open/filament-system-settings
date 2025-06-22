<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'Systeeminstellingen',
        'group' => 'Instellingen',
    ],
    'tab' => [
        'application' => 'Applicatie',
        'mail' => 'E-mail',
        'security' => 'Beveiliging',
    ],
    'mail' => [
        'from_email' => 'Afzender e-mail',
        'from_name' => 'Afzender naam',
        'host' => 'Host',
        'port' => 'Poort',
        'username' => 'Gebruikersnaam',
        'password' => 'Wachtwoord',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'Limiet inlogpogingen',
        'login_attempts_lockout_window' => 'Blokkeervenster',
        'login_attempts_lockout_attempts' => 'Aantal blokkeer pogingen',
        'login_attempts_lockout_duration' => 'Blokkeerduur',
        'enable_login_captcha' => 'Login captcha inschakelen',
    ],
];
