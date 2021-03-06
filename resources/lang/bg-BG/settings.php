<?php

return [

    'company' => [
        'name'              => 'Име',
        'email'             => 'Имейл',
        'phone'             => 'Телефон',
        'address'           => 'Адрес',
        'logo'              => 'Лого',
    ],
    'localisation' => [
        'tab'               => 'Локализиране',
        'date' => [
            'format'        => 'Формат на датата',
            'separator'     => 'Разделител за дата',
            'dash'          => 'Тире (-)',
            'dot'           => 'Точка (.)',
            'comma'         => 'Запетая (,)',
            'slash'         => 'Наклонена черта (/)',
            'space'         => 'Празно място ( )',
        ],
        'timezone'          => 'Часова зона',
    ],
    'invoice' => [
        'tab'               => 'Фактура',
        'prefix'            => 'Префикс',
        'digit'             => 'Брой цифри',
        'next'              => 'Следващия номер',
        'logo'              => 'Лого',
    ],
    'default' => [
        'tab'               => 'По подразбиране',
        'account'           => 'Акаунт по подразбиране',
        'currency'          => 'Валута по подразбиране',
        'tax'               => 'Данъчна ставка по подразбиране',
        'payment'           => 'Начин на плащане по подразбиране',
        'language'          => 'Език по подразбиране',
    ],
    'email' => [
        'protocol'          => 'Протокол',
        'php'               => 'PHP Mail',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP хост',
            'port'          => 'SMTP порт',
            'username'      => 'SMTP потребител',
            'password'      => 'SMTP парола',
            'encryption'    => 'SMTP сигурност',
            'none'          => 'Няма',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Път към Sendmail',
        'log'               => 'Лог имейли',
    ],
    'scheduling' => [
        'tab'               => 'График на дейностите',
        'send_invoice'      => 'Изпрати напомняне за фактура',
        'invoice_days'      => 'Изпрати след забавени дни',
        'send_bill'         => 'Изпрати напомняне за фактура',
        'bill_days'         => 'Изпрати преди забавени дни',
        'cron_command'      => 'Грешна команда',
        'schedule_time'     => 'Час за стартиране',
    ],
    'appearance' => [
        'tab'               => 'Външен вид',
        'theme'             => 'Тема',
        'light'             => 'Светла',
        'dark'              => 'Тъмна',
        'list_limit'        => 'Резултати на страница',
        'use_gravatar'      => 'Използвай Gravatar',
    ],
    'system' => [
        'tab'               => 'Система',
        'session' => [
            'lifetime'      => 'Сесия живот (минути)',
            'handler'       => 'Управление на сесиите',
            'file'          => 'Файл',
            'database'      => 'База данни',
        ],
        'file_size'         => 'Макс размер на файл (МБ)',
        'file_types'        => 'Разрешени типове файлове',
    ],

];
