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
        /*
        //全域共用變數
        // view()->share('globalShare', 'Global share Data ...');

        //多視圖共用變數
        //app/Providers/AppServiceProvider.php

        //讓陣列內的view視圖共用變數
        view()->composer( ['partials.header', 'partials.footer'],function($view){
            $view->with('tasks ', Task::all());
        });
    
        //讓partials資料夾內的所有視圖共用變數
        view()->composer('partials.*',function($view){
            $view->with('tasks ',Task::all());
        });
        */
    }
}
