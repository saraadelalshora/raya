<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeatureProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_product', function (Blueprint $table) {
             $table->increments('id');
            $table->unsignedInteger('feature_id');
            $table->unsignedInteger('feature_deatils_id');
            $table->unsignedInteger('product_id');
            $table->double('price');
            $table->timestamps();


        $table->foreign('feature_id')->references('id')->on('features')
        ->onDelete('cascade');
        $table->foreign('feature_deatils_id')->references('id')->on('features_detailes')
        ->onDelete('cascade');
        $table->foreign('product_id')->references('id')->on('products')
             ->onDelete('cascade');
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feature_product');
    }
}
