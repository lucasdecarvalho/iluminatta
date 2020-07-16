<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            
            // user data
            $table->id();
            $table->string('name');
            $table->string('doc')->nullable();
            // user contacts and logon data
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // permition level
            $table->boolean('is_admin')->nullable();
            // address data
            $table->string('address_title')->nullable();
            $table->string('address')->nullable();
            $table->string('number')->nullable();
            $table->string('neigh')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('country')->nullable();
            // optionals
            $table->string('obs')->nullable();
            // registration data
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
