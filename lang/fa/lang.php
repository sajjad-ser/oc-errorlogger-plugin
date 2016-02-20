<?php

return [
	'plugin' => [
		'name' => 'گزارش کننده خطا ها',
		'description' => 'ارسال گزارش های خطا به ایمیل، HipChat، Mandrill، NewRelic، Slack، Syslog و ...'
	],
	'settings' => [
		'label' => 'گزارش کننده خطا ها',
		'description' => 'تنظیم سرویس ایمیل و کلیدهاس API',
	],
    'permissions' => [
        'tab' => 'گزارش کننده خطا ها',
        'all' => [
            'label' => 'مدیریت ارسال گزارشات خطا'
        ]
    ],

    'nativemailer' => [
        'tab' => [
            'label' => 'ایمیل کننده'
        ],
        'enabled' => [
            'label' => 'فعال سازی ارسال توسط ایمیل'
        ],
        'email' => [
            'label' => 'ایمیل گسترش دهنده',
            'comment' => 'دریافت کننده گزارش خطاها'
        ],
        'level' => [
            'label' => 'درجه گزارش گیری',
            'comment' => 'کمترین درجه گزارش گیری جهت ارسال هشدار.'
        ],
        'debug' => [
            'label' => 'غیر فعال سازی به هنگام خطاگیری',
            'comment' => 'ارسال ایمیل به هنگام فعال بودن بودن خطاگیر غیر فعال میشود'
        ]
    ],

    'slack' => [
        'tab' => [
            'label' => 'Slack'
        ],
        'enabled' => [
            'label' => 'فعال سازی ارسال هشدار توسط Slack'
        ],
        'token' => [
            'label' => 'کلید API برای Slack',
            'comment' => 'کلید API را میتوانید از آدرس https://api.slack.com/web دریافت کنید'
        ],
        'channel' => [
            'label' => 'کانال Slack',
            'comment' => 'ID کانال کد شده یا نام و یا نام کاربری (@vojtasvoboda) جهت ارسال پیغام'
        ],
        'username' => [
            'label' => 'نام ربات',
            'comment' => 'نام رباتی که پیغام را ارسال میکند برای مثال: error-bot'
        ],
        'attachment' => [
            'label' => 'ارسال به عنوان فایل پیوست (اختیاری)',
            'comment' => 'آیا میخواهید پیغام به صورت فایل پیوستی ارسال شود یا متن ارسال شود؟'
        ],
        'level' => [
            'label' => 'درجه گزارش گیری',
            'comment' => 'کمترین درجه گزارش گیری جهت ارسال هشدار.'
        ],
    ],

    'syslog' => [
        'tab' => [
            'label' => 'Syslog'
        ],
        'enabled' => [
            'label' => 'فعال سازی ارسال هشدار توسط Syslog'
        ],
        'ident' => [
            'label' => 'Ident',
            'comment' => 'ident برنامه برای مثال: mysupersite'
        ],
        'facility' => [
            'label' => 'Facility',
            'comment' => 'Facility برنامه برای مثال: local6'
        ],
        'level' => [
            'label' => 'درجه گزارش گیری',
            'comment' => 'کمترین درجه گزارش گیری جهت ارسال هشدار.'
        ],
    ],

    'newrelic' => [
        'tab' => [
            'label' => 'New Relic'
        ],
        'enabled' => [
            'label' => 'فعال سازی ارسال هشدار توسط New Relic'
        ],
        'appname' => [
            'label' => 'نام برنامه',
            'comment' => 'نام برنامه New Relic که هشدار ها را دریافت میکند'
        ],
        'level' => [
            'label' => 'درجه گزارش گیری',
            'comment' => 'کمترین درجه گزارش گیری جهت ارسال هشدار.'
        ],
    ]
];
