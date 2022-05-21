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
        Schema::create('s_homes', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable()->default('logo.png');
            $table->string('banner')->default('Select Your New Perfect Style');
            $table->string('banner_description')->nullable()->default('It uses utility classes for typography and spacing to');
            $table->string('banner_photo')->nullable()->default('banner_photo.png');
            $table->string('banner1')->default('FINAL SALES');
            $table->string('banner1_description')->nullable()->default('FINAL SALES Up to 70% * Free shipping on orders over $70.');
            $table->string('banner1_photo')->nullable()->default('banner1_photo.png');
            $table->text('social1')->nullable();
            $table->text('social2')->nullable();
            $table->text('social3')->nullable();
            $table->text('social4')->nullable();
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
        Schema::dropIfExists('s_homes');
    }
};
