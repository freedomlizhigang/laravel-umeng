<?php

namespace LiZG\UmengPush;

use Illuminate\Support\ServiceProvider;

class UmengPushServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/umengpush.php' => config_path('umengpush.php'),
        ]);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // 绑定一下，要不然没有办法使用facade
        $this->app->singleton('umengpush',function(){
            return new UmengPush();
        });
    }
}
