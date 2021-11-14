<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CartDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("cart_details", function (Blueprint $table) {
            $table->id();
            $table->integer("cart_id");
            $table->string("item");
            $table->integer("num");
            $table->string("sugar");
            $table->string("ice");
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
        Schema::dropIfExists("cart_details");
    }
}
