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
            $table->string('logo')->nullable()->default('logo');
            $table->string('banner');
            $table->string('banner_description')->nullable();
            $table->string('banner_photo')->nullable();
            $table->string('banner1');
            $table->string('banner1_description')->nullable();
            $table->string('banner1_photo')->nullable();
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
