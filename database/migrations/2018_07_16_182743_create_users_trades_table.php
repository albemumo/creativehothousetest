<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_trades', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('amount', 16, 9);
            $table->decimal('price_usd', 16, 9);
            $table->decimal('total_usd', 16, 9);
            $table->text('notes');
            $table->dateTimeTz('traded_at');
            $table->timestampsTz();
            $table->foreign('coin_id')->references('id')->on('coin');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_trades');
    }
}
