<?php

namespace App\Providers;
use App\Models\Product;
use App\Models\Protype;
use App\Models\Manufacture;

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
        // view()->composer('*',function($view){
        //     $view->with([
        //         'protype'=> Protype::with('protype')->where(['type_id'=>0])->get(),
        //     ]);
        // });
    }
}
