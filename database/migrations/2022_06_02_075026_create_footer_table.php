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
        Schema::create('footer', function (Blueprint $table) {
            $table->engine = 'InnoDB';
                        
            $table->integer('id');

            $table->bigInteger('title')->unsigned();

            $table->foreign('title')
            ->references('id')->on('translates')
            ->onDelete('cascade');
            
            $table->bigInteger('description')->unsigned();

            $table->foreign('description')
                  ->references('id')->on('translates')
                  ->onDelete('cascade');    
            
            $table->string('img1',255)->nullable();
            $table->string('img2',255)->nullable();
            $table->string('img3',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footer');
    }
};