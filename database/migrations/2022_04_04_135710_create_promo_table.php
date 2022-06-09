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
        Schema::create('promo', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');

            $table->bigInteger('title')->unsigned();
        
            $table->bigInteger('description')->unsigned();

            $table->foreign('description')
                  ->references('id')->on('translates')
                  ->onDelete('cascade');

            $table->foreign('title')
                   ->references('id')->on('translates')
                   ->onDelete('cascade');
;

            $table->string('img',255)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promo');
    }
};