<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solds', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('street');
            $table->string('number');
            $table->string('comp')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zipcode');
            $table->string('id_shop')->nullable();
            $table->string('tild')->nullable();
            $table->string('payment_type');
            $table->string('value');
            $table->string('installments')->nullable();
            $table->longText('cart');
            $table->string('tracking_number')->nullable();
            $table->boolean('success');
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
        Schema::dropIfExists('solds');
    }
}
