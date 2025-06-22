<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => '系统设置',
        'group' => '设置',
    ],
    'tab' => [
        'application' => '应用',
        'mail' => '邮件',
        'security' => '安全',
    ],
    'mail' => [
        'from_email' => '发件人邮箱',
        'from_name' => '发件人名称',
        'host' => '主机',
        'port' => '端口',
        'username' => '用户名',
        'password' => '密码',
    ],
    'security' => [
        'login_attempts_rate_limit' => '登录尝试次数限制',
        'login_attempts_lockout_window' => '锁定窗口',
        'login_attempts_lockout_attempts' => '锁定尝试次数',
        'login_attempts_lockout_duration' => '锁定时长',
        'enable_login_captcha' => '启用登录验证码',
    ],
];
