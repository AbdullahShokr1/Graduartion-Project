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
        if(!Schema::hasTable('products')){
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('describe');
                $table->float('price');
                $table->string('photo');
                $table->string('offer')->default('New');
                $table->foreignId('writer_id')->references('id')->on('admins')->onDelete('cascade');
                $table->string('glassesModel');
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
