<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'システム設定',
        'group' => '設定',
    ],
    'tab' => [
        'application' => 'アプリケーション',
        'mail' => 'メール',
        'security' => 'セキュリティ',
    ],
    'mail' => [
        'from_email' => '送信元メールアドレス',
        'from_name' => '送信者名',
        'host' => 'ホスト',
        'port' => 'ポート',
        'username' => 'ユーザー名',
        'password' => 'パスワード',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'ログイン試行回数制限',
        'login_attempts_lockout_window' => 'ロックアウトウィンドウ',
        'login_attempts_lockout_attempts' => 'ロックアウト試行回数',
        'login_attempts_lockout_duration' => 'ロックアウト期間',
        'enable_login_captcha' => 'ログインキャプチャを有効化',
    ],
];
