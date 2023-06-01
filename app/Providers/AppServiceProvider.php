<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\product;
use App\Models\producttype;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('header', function ($view) {
            $loai_sp = producttype::all();
            $view->with('loai_sp', $loai_sp);
        });

        view()->composer('page.producttype', function ($view) {
            $product_new = product::where('new', 1)->orderBy('id', 'DESC')->skip(1)->take(8)->get();
            $view->with('product_new', $product_new);
        });
    }
}
