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
        Schema::create('price', function (Blueprint $table) {
            $table->engine = 'InnoDB';
                        
            $table->integer('id');
            $table->bigInteger('description')->unsigned();

            $table->foreign('description')
            ->references('id')->on('translates')
            ->onDelete('cascade');

            $table->bigInteger('child_ticket_title')->unsigned();
            $table->bigInteger('time_hour_child')->unsigned();
            $table->float('time_hour_price_child');
            $table->bigInteger('time_day_child')->unsigned();
            $table->float('time_day_price_child');
            $table->bigInteger('spa_child')->unsigned();
            $table->float('spa_child_price');

            
            $table->foreign('child_ticket_title')
            ->references('id')->on('translates')
            ->onDelete('cascade');
            $table->foreign('time_hour_child')
            ->references('id')->on('translates')
            ->onDelete('cascade');
            $table->foreign('time_day_child')
            ->references('id')->on('translates')
            ->onDelete('cascade');
            $table->foreign('spa_child')
            ->references('id')->on('translates')
            ->onDelete('cascade');        
            
            $table->bigInteger('adult_ticket_title')->unsigned();
            $table->bigInteger('time_hour_adult')->unsigned();
            $table->float('time_hour_price_adult');
            $table->bigInteger('time_day_adult')->unsigned();
            $table->float('time_day_price_adult');
            $table->bigInteger('spa_adult')->unsigned();
            $table->float('spa_adult_price');
            
            $table->foreign('adult_ticket_title')
            ->references('id')->on('translates')
            ->onDelete('cascade');
            $table->foreign('time_hour_adult')
            ->references('id')->on('translates')
            ->onDelete('cascade');
            $table->foreign('time_day_adult')
            ->references('id')->on('translates')
            ->onDelete('cascade');
            $table->foreign('spa_adult')
            ->references('id')->on('translates')
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
        Schema::dropIfExists('price');
    }
};
