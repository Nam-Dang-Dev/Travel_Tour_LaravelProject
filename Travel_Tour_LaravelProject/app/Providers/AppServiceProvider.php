<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema; 
use Illuminate\Support\ServiceProvider;
use App\category;
use App\tour;
use DB;
use App\background_image;
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

           // $backgroundImages = background_image::all();
          $backgroundImages = background_image::where('id',1)->first();
           $departure_location = DB::table('tours')
            ->select('departure_location')
            ->distinct()
            ->get();
            $end_location = DB::table('tours')
            ->select('end_location')
            ->distinct()
            ->get();
            $view->with(['category'=>$category,'backgroundImages'=> $backgroundImages,'end_location'=>$end_location,'departure_location'=> $departure_location]);

        });

         view()->composer('admin.tour.pages.index',function($view){ 
             $tour = tour::all();  
             $view->with('tour',$tour);              
         }); 
     }
         
 }
