<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('symbol');
            $table->string('logo')->nullable();
            $table->unsignedInteger('rank');
            $table->decimal('price_usd', 16, 9)->nullable();
            $table->decimal('price_btc', 20, 13)->nullable();;
            $table->decimal('24h_volume_usd', 20, 9)->nullable();
            $table->bigInteger('market_cap_usd')->nullable();
            $table->bigInteger('available_supply')->nullable();
            $table->bigInteger('total_supply')->nullable();
            $table->decimal('percent_change_1h', 8, 2)->nullable();
            $table->decimal('percent_change_24h', 8, 2)->nullable();
            $table->decimal('percent_change_7d', 8, 2)->nullable();
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coins');
    }
}
