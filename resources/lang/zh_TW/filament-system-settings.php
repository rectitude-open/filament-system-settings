<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => '系統設定',
        'group' => '設定',
    ],
    'tab' => [
        'application' => '應用程式',
        'mail' => '郵件',
        'security' => '安全',
    ],
    'application' => [
        'site_name' => '網站名稱',
        'site_title' => '網站標題',
        'site_description' => '網站描述',
        'site_logo' => '網站Logo',
        'site_favicon' => '網站Favicon',
    ],
    'mail' => [
        'from_email' => '寄件人信箱',
        'from_name' => '寄件人名稱',
        'host' => '主機',
        'port' => '連接埠',
        'username' => '使用者名稱',
        'password' => '密碼',
    ],
    'security' => [
        'login_attempts_rate_limit' => '登入嘗試次數限制',
        'login_attempts_lockout_window' => '鎖定視窗',
        'login_attempts_lockout_attempts' => '鎖定嘗試次數',
        'login_attempts_lockout_duration' => '鎖定時長',
        'enable_login_captcha' => '啟用登入驗證碼',
    ],
];
