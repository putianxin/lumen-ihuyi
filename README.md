# lumen-ihuyi

<p>:calling: 互亿无线 composer package.</p>

# Requirement

- PHP >= 7.1

# 安装

```shell
$ composer require "zhenggg/easy-ihuyi"
```

# 配置

**lumen 用户请手动复制config文件**

复制后修改 `config\ihuyi.php` 文件完善配置信息。
```PHP
'APIID' => 'XXX',
'APIKEY' => 'XXX',
```

# Usage

```php

//$phone_number 多个号码以逗号分隔传入

//短信验证码/通知
iHuyi::sms()->content($content)->send($phone_number);
//语音验证码
iHuyi::voice()->content($content)->send($phone_number);
//国际短信
iHuyi::isms()->content($content)->send($phone_number);
//短信营销
iHuyi::yxsms()->content($content)->send($phone_number);
//彩信营销(定时发送) 
iHuyi::yxsms()->content($content)->stime($time)->send($phone_number);
//彩信营销
iHuyi::mms()->mmsid($mmsid)->pid($pid)->send($phone_number);
```
# License

MIT