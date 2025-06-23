<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => '시스템 설정',
        'group' => '설정',
    ],
    'tab' => [
        'application' => '애플리케이션',
        'mail' => '메일',
        'security' => '보안',
    ],
    'application' => [
        'site_name' => '사이트 이름',
        'site_url' => '사이트 URL',
        'site_title' => '사이트 제목',
        'site_description' => '사이트 설명',
        'site_logo' => '사이트 로고',
        'site_favicon' => '사이트 파비콘',
    ],
    'mail' => [
        'from_email' => '보내는 이메일',
        'from_name' => '보내는 이름',
        'host' => '호스트',
        'port' => '포트',
        'username' => '사용자명',
        'password' => '비밀번호',
    ],
    'security' => [
        'login_attempts_rate_limit' => '로그인 시도 제한',
        'login_attempts_lockout_window' => '잠금 윈도우',
        'login_attempts_lockout_attempts' => '잠금 시도 횟수',
        'login_attempts_lockout_duration' => '잠금 기간',
        'enable_login_captcha' => '로그인 캡차 활성화',
    ],
];
