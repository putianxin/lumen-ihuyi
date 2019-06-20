<?php

namespace Ptx\Huyi;

use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;
use Zhenggg\Huyi\EasyHuyi;

class HuyiServiceProvider extends ServiceProvider
{
    /**
     * Determin is defer.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Boot the service.
     *
     * @author yansongda <me@yansongda.cn>
     */
    public function boot()
    {
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([
                dirname(__DIR__).'/config/ihuyi.php' => config_path('ihuyi.php'), ],
                'ihuyi'
            );
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('ihuyi');
        }
    }

    /**
     * Regist the service.
     *
     * @author yansongda <me@yansongda.cn>
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(dirname(__DIR__).'/config/ihuyi.php', 'ihuyi');

        $this->app->singleton('ihuyi.sms', function (){
            $easyHuyi = new EasyHuyi(app('config')->get('ihuyi.sms'));
            return $easyHuyi->sms();
        });
        $this->app->singleton('ihuyi.voice', function (){
            $easyHuyi = new EasyHuyi(app('config')->get('ihuyi.voice'));
            return $easyHuyi->voice();
        });
        $this->app->singleton('ihuyi.isms', function (){
            $easyHuyi = new EasyHuyi(app('config')->get('ihuyi.isms'));
            return $easyHuyi->isms();
        });
        $this->app->singleton('ihuyi.yxsms', function (){
            $easyHuyi = new EasyHuyi(app('config')->get('ihuyi.yxsms'));
            return $easyHuyi->yxSms();
        });
        $this->app->singleton('ihuyi.mms', function (){
            $easyHuyi = new EasyHuyi(app('config')->get('ihuyi.mms'));
            return $easyHuyi->mms();
        });
    }

    /**
     * Get services.
     *
     * @author yansongda <me@yansongda.cn>
     *
     * @return array
     */
    public function provides()
    {
        return ['ihuyi.sms'];
    }
}
