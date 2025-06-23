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
    'application' => [
        'site_name' => 'Site Adı',
        'site_url' => 'Site URL',
        'site_title' => 'Site Başlığı',
        'site_description' => 'Site Açıklaması',
        'site_logo' => 'Site Logosu',
        'site_favicon' => 'Site Favicon',
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
