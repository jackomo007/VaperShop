<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments("id");
			$table->integer("shopping_cart_id")->unsigned();
			$table->string("status")->default("creado");
			$table->decimal("total",9,2);

            $table->foreign("shopping_cart_id")->references("id")->on("shopping_carts");
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
         Schema::table('orders', function(Blueprint $table)
        {
            $table->dropForeign('orders_shopping_cart_id_foreign');
            $table->dropColumn('shopping_cart_id');
        });

        Schema::dropIfExists('orders');
    }
}
