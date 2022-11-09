<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->integer('wallet_users_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('smartcontract_address')->nullable();
            $table->string('name')->nullable();
            $table->text('slug')->nullable();
            $table->text('domain_id')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('banner')->nullable();
            $table->text('twitter_url')->nullable();
            $table->text('discord_url')->nullable();
            $table->text('medium_url')->nullable();
            $table->integer('plan_id')->nullable();
            $table->integer('crossmint_id')->nullable();
            $table->text('status')->nullable();
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
        Schema::dropIfExists('shops');
    }
}
