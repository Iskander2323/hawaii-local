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
        Schema::create('user_orders', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');
            
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('order_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('order_id')
                ->references('id')->on('order')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_orders');
    }
};
