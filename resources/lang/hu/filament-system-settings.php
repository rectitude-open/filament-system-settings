<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'Rendszerbeállítások',
        'group' => 'Beállítások',
    ],
    'tab' => [
        'application' => 'Alkalmazás',
        'mail' => 'Levelezés',
        'security' => 'Biztonság',
    ],
    'application' => [
        'site_name' => 'Webhely neve',
        'site_title' => 'Webhely címe',
        'site_description' => 'Webhely leírása',
        'site_logo' => 'Webhely logója',
        'site_favicon' => 'Webhely favicon',
    ],
    'mail' => [
        'from_email' => 'Feladó e-mail címe',
        'from_name' => 'Feladó neve',
        'host' => 'Hoszt',
        'port' => 'Port',
        'username' => 'Felhasználónév',
        'password' => 'Jelszó',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'Bejelentkezési próbálkozások korlátja',
        'login_attempts_lockout_window' => 'Zárolási ablak',
        'login_attempts_lockout_attempts' => 'Zárolási próbálkozások',
        'login_attempts_lockout_duration' => 'Zárolás időtartama',
        'enable_login_captcha' => 'Bejelentkezési captcha engedélyezése',
    ],
];
