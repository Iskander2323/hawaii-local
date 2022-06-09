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
        Schema::create('spa_info', function (Blueprint $table) 
        {
            $table->engine = 'InnoDB';
            
            $table->id();

            $table->bigInteger('description')->unsigned();
            $table->foreign('description')
                  ->references('id')->on('translates')
                  ->onDelete('cascade');

            $table->string('img')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spa_info');
    }
};