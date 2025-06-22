<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'Sistem Ayarları',
        'group' => 'Ayarlar',
    ],
    'tab' => [
        'application' => 'Uygulama',
        'mail' => 'E-posta',
        'security' => 'Güvenlik',
    ],
    'mail' => [
        'from_email' => 'Gönderen E-posta',
        'from_name' => 'Gönderen Adı',
        'host' => 'Sunucu',
        'port' => 'Port',
        'username' => 'Kullanıcı Adı',
        'password' => 'Şifre',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'Giriş Denemesi Sınırı',
        'login_attempts_lockout_window' => 'Kilitlenme Penceresi',
        'login_attempts_lockout_attempts' => 'Kilitlenme Denemeleri',
        'login_attempts_lockout_duration' => 'Kilitlenme Süresi',
        'enable_login_captcha' => 'Giriş Captcha Etkinleştir',
    ],
];
