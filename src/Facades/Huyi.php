<?php

namespace Ptx\Huyi\Facades;

use Illuminate\Support\Facades\Facade;

class Huyi extends Facade
{
    /**
     * Return the facade accessor.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'ihuyi.sms';
    }

    /**
     * Return the facade accessor.
     *
     * @return string
     */
    public static function sms()
    {
        return app('ihuyi.sms');
    }

    /**
     * Return the facade accessor.
     * 彩信营销
     * @return string
     */
    public static function mms()
    {
        return app('ihuyi.mms');
    }

    /**
     * Return the facade accessor.
     * 国际短信
     * @return string
     */
    public static function imms()
    {
        return app('ihuyi.imms');
    }

    /**
     * Return the facade accessor.
     * 语音验证码
     * @return string
     */
    public static function voice()
    {
        return app('ihuyi.voice');
    }

    /**
     * Return the facade accessor.
     * 彩信营销(定时发送)
     * @return string
     */
    public static function yxsms()
    {
        return app('ihuyi.yxsms');
    }
}
