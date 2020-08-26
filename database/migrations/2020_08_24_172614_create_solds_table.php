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

            $table->string('merchantOrderId');
            $table->boolean('success');
            $table->string('tid');
            
            $table->string('value');
            $table->string('paymentType');
            $table->string('installments')->nullable();
            
            $table->string('userId');
            $table->string('street');
            $table->string('number');
            $table->string('comp')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zipcode');
            $table->longText('cart');
            
            $table->string('paymentId');
            $table->string('trackingNumber')->nullable();
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
