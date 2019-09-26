<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInShoppingCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_shopping_carts', function (Blueprint $table) {
            $table->increments("id");
            $table->integer('product_id')->unsigned();
			$table->integer('shopping_cart_id')->unsigned();
			$table->integer('quantity');
			$table->float('price_sale');
			
			$table->foreign("shopping_cart_id")->references("id")->on("shopping_carts");
			$table->foreign("product_id")->references("id")->on("products");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('in_shopping_carts', function(Blueprint $table)
        {
            $table->dropForeign('in_shopping_carts_product_id_foreign');
            $table->dropColumn('product_id');

            $table->dropForeign('in_shopping_carts_shopping_cart_id_foreign');
            $table->dropColumn('shopping_cart_id');
        });

        Schema::dropIfExists('in_shopping_carts');
    }
}
