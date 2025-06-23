<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'Pengaturan Sistem',
        'group' => 'Pengaturan',
    ],
    'tab' => [
        'application' => 'Aplikasi',
        'mail' => 'Email',
        'security' => 'Keamanan',
    ],
    'application' => [
        'site_name' => 'Nama Situs',
        'site_url' => 'URL Situs',
        'site_title' => 'Judul Situs',
        'site_description' => 'Deskripsi Situs',
        'site_logo' => 'Logo Situs',
        'site_favicon' => 'Favicon Situs',
    ],
    'mail' => [
        'from_email' => 'Email Pengirim',
        'from_name' => 'Nama Pengirim',
        'host' => 'Host',
        'port' => 'Port',
        'username' => 'Nama Pengguna',
        'password' => 'Kata Sandi',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'Batas Percobaan Login',
        'login_attempts_lockout_window' => 'Jendela Penguncian',
        'login_attempts_lockout_attempts' => 'Jumlah Percobaan Penguncian',
        'login_attempts_lockout_duration' => 'Durasi Penguncian',
        'enable_login_captcha' => 'Aktifkan Captcha Login',
    ],
];
