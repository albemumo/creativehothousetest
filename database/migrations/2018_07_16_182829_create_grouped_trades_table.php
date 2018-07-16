<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupedTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grouped_trades', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('amount', 16, 9);
            $table->decimal('price_usd', 16, 9);
            $table->foreign('coin_id')->references('id')->on('coin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grouped_trades');
    }
}
