<?php

return [
    // 互亿无线分配的 APPID
    'sms'=>[
        'APIID' => env('HUYI_API_ID', ''),
        'APIKEY' => env('HUYI_API_KEY', ''),
    ],
    'yxsms'=>[
        'APIID' => env('HUYI_YX_API_ID', ''),
        'APIKEY' => env('HUYI_YX_API_KEY', ''),
    ],
    'voice'=>[
        'APIID' => env('HUYI_VOICE_API_ID', ''),
        'APIKEY' => env('HUYI_VOICE_API_KEY', ''),
    ],
    'mms'=>[
        'APIID' => env('HUYI_MMS_API_ID', ''),
        'APIKEY' => env('HUYI_MMS_API_KEY', ''),
    ],
    'isms'=>[
        'APIID' => env('HUYI_ISMS_API_ID', ''),
        'APIKEY' => env('HUYI_ISMS_API_KEY', ''),
    ],
];
