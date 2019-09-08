<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

           $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sub_categories', function(Blueprint $table)
        {
            $table->dropForeign('sub_categories_category_id_foreign');
            $table->dropColumn('category_id');
        });

        Schema::dropIfExists('sub_categories');
    }
}
