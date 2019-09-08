<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
           $table->increments("id");
			$table->string('title');
			$table->text('description');
            $table->decimal('pricing',9,2);
            $table->string('extension')->nullable();
			$table->unsignedBigInteger('sub_category_id');
            $table->timestamps();

            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function(Blueprint $table)
        {
            $table->dropForeign('products_sub_category_id_foreign');
            $table->dropColumn('sub_category_id');
        });

        Schema::dropIfExists('products');
    }
}
