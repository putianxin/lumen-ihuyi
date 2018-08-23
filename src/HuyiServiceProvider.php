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
                'laravel-sms'
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
        $easyHuyi = new EasyHuyi(config('ihuyi'));
        $this->app->singleton('ihuyi.sms', function () use($easyHuyi){
            return $easyHuyi->sms();
        });
        $this->app->singleton('ihuyi.voice', function () use($easyHuyi){
            return $easyHuyi->voice();
        });
        $this->app->singleton('ihuyi.isms', function () use($easyHuyi){
            return $easyHuyi->isms();
        });
        $this->app->singleton('ihuyi.yxsms', function () use($easyHuyi){
            return $easyHuyi->yxsms();
        });
        $this->app->singleton('ihuyi.mms', function () use($easyHuyi){
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
