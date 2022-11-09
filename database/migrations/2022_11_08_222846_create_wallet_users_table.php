<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletUsersTable extends Migration
{
    public function up()
    {
        Schema::create('wallet_users', function (Blueprint $table) {
            $table->id();
            $table->string('wallet');
            $table->string('user_id')->nullable();
            $table->string('profile_picture')->nullable();
            $table->integer('wallet_user_id')->nullable();
            $table->integer('status')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('wallet_users');
    }
}
