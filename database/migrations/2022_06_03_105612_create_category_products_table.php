<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_products', function (Blueprint $table) {
            $table->id("category_product_id");
            $table->unsignedBigInteger("categorie_id");
            $table->foreign("categorie_id")->references("categorie_id")->on("categories");
            $table->unsignedBigInteger("product_id");
            $table->foreign("product_id")->references("product_id")->on("products");
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
        Schema::dropIfExists('category_products');
    }
};
