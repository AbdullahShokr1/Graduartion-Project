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
        if(!Schema::hasTable('payments')){
            Schema::create('payments', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->integer('card_number');
                $table->integer('cvv');
                $table->integer('ex_date');
                $table->foreignid('order_id')->constrained()->references('id')->on('orders')->onDelete('cascade');
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
        Schema::dropIfExists('payments');
    }
};
