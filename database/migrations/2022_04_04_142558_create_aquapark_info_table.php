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
        Schema::create('aquapark_info', function (Blueprint $table) {
            $table->engine = 'InnoDB';
                        
            $table->integer('id');
            $table->bigInteger('description')->unsigned();



            $table->foreign('description')
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
        Schema::dropIfExists('aquapark_info');
    }
};