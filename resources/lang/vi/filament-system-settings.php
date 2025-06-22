<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'Cài đặt hệ thống',
        'group' => 'Cài đặt',
    ],
    'tab' => [
        'application' => 'Ứng dụng',
        'mail' => 'Thư',
        'security' => 'Bảo mật',
    ],
    'mail' => [
        'from_email' => 'Email người gửi',
        'from_name' => 'Tên người gửi',
        'host' => 'Máy chủ',
        'port' => 'Cổng',
        'username' => 'Tên người dùng',
        'password' => 'Mật khẩu',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'Giới hạn số lần đăng nhập',
        'login_attempts_lockout_window' => 'Cửa sổ khóa',
        'login_attempts_lockout_attempts' => 'Số lần khóa',
        'login_attempts_lockout_duration' => 'Thời gian khóa',
        'enable_login_captcha' => 'Bật captcha đăng nhập',
    ],
];
