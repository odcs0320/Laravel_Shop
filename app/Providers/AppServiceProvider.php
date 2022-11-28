<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //全域共用變數
        view()->share('share_prd', 'This Global share value.');

        //多視圖共用變數 (指定視圖)
        view()->composer(['ec.pages.home', 'ec.pages.homeBody'], function($view){
            $view->with('partial_share', '【指定部分】視圖共用變數');
        });

        //多視圖共用變數 (指定某資料夾內all視圖)
        view()->composer('ec.pages.*', function($view){
            $view->with('partial_all_share', '【指定資料夾內所有】視圖共用變數');
        });

    }
}
