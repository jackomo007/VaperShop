<?php

namespace App\Providers;

use App\InShoppingCart;
use Illuminate\Support\ServiceProvider;

class ShoppingCartProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       view()->composer("*",function($view){
            $in_shopping_cart = new InShoppingCart;
            $productsCount = $in_shopping_cart->productsInCart();
			$view->with("productsCount", $productsCount);
		});
    }
}
