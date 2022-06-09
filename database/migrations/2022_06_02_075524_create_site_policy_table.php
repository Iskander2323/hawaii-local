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
        Schema::create('site_policy', function (Blueprint $table) {
            $table->engine = 'InnoDB';
                        
            $table->bigIncrements('id');

            $table->bigInteger('title')->unsigned();

            $table->foreign('title')
            ->references('id')->on('translates')
            ->onDelete('cascade');

            $table->bigInteger('description')->unsigned();

            $table->foreign('description')
            ->references('id')->on('translates')
            ->onDelete('cascade');

            $table->string('file_ru',255)->nullable();
            $table->string('file_kz',255)->nullable();

            // $table->bigInteger('link')->unsigned();
            
            // $table->foreign('link')
            // ->references('id')->on('translates')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_policy');
    }
};