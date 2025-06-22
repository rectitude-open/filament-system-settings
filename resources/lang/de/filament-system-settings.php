<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'Systemeinstellungen',
        'group' => 'Einstellungen',
    ],
    'tab' => [
        'application' => 'Anwendung',
        'mail' => 'E-Mail',
        'security' => 'Sicherheit',
    ],
    'mail' => [
        'from_email' => 'Absender-E-Mail',
        'from_name' => 'Absendername',
        'host' => 'Host',
        'port' => 'Port',
        'username' => 'Benutzername',
        'password' => 'Passwort',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'Anmeldeversuche Rate Limit',
        'login_attempts_lockout_window' => 'Sperrzeitfenster',
        'login_attempts_lockout_attempts' => 'Sperrversuche',
        'login_attempts_lockout_duration' => 'Sperrdauer',
        'enable_login_captcha' => 'Login-Captcha aktivieren',
    ],
];
