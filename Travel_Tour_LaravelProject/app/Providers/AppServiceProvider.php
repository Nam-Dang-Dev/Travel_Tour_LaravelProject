<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema; 
use Illuminate\Support\ServiceProvider;
use App\category;
use App\tour;
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
         Schema::defaultStringLength(191); //NEW: Increase StringLength
         view()->composer('user.blocks.menu',function($view){
            $category = category::all();
           
            $view->with('category',$category);
           
        });
         view()->composer('user.blocks.header',function($view){
            $category = category::all();
            
            $view->with('category',$category);
        });
     }
 }
