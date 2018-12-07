# lumen-ihuyi

<p>:calling: 互亿无线 composer package.</p>

## Requirement

- PHP >= 7.1

## 安装

```shell
$ composer require ptx/lumen-ihuyi"
```

## 配置

**请在.env中加入以下配置信息或移动并修改config中的文件**

```PHP
'HUYI_APP_ID' => 'XXX',
'HUYI_API_KEY' => 'XXX',
```

注册服务

lumen:

$app->register(\Ptx\Huyi\HuyiServiceProvider::class);

laravel:

ServiceProvider:

\Ptx\Huyi\HuyiServiceProvider::class

## Usage

```php

//$phone_number 多个号码以逗号分隔传入

//短信验证码/通知
Huyi::sms()->content($content)->send($phone_number);

//语音验证码
Huyi::voice()->content($content)->send($phone_number);
//国际短信
Huyi::isms()->content($content)->send($phone_number);
//短信营销
Huyi::yxsms()->content($content)->send($phone_number);
//彩信营销(定时发送) 
Huyi::yxsms()->content($content)->stime($time)->send($phone_number);
//彩信营销
Huyi::mms()->mmsid($mmsid)->pid($pid)->send($phone_number);
```
## License

MIT
