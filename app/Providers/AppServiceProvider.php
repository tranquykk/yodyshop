<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Categories;
use App\Models\Classify;
use Illuminate\Support\Facades\Auth;

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
        // $categories = Categories::where('parent_id', '3')->with('classifies.classifyGroups')->get();

        // foreach($categories as $category) {
        //     echo $category->cat_id . '<br/><br/>';
        //     foreach($category->classifies as $classify) {
        //         echo $classify->classify_id  . '<br/>';
        //         foreach((array)$classify->classfy_groups as $classfyGroup) {

        //         }
        //     }
        // }

        // dd($categories->toArray());
        // view()->share('arrMenu', Categories::where('parent_id', '3')->with('classifies.classifyGroups')->get());
        view()->share('arrMenu', Categories::where('cat_id', '!=', '4')->where('parent_id', '!=', '4')->get());
        view()->share('arrList', Categories::where('parent_id', '4')->get());

        
    }
}
