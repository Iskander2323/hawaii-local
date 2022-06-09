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
        Schema::create('menu', function (Blueprint $table) {
            $table->engine = 'InnoDB';
                        
            $table->bigIncrements('id');

            $table->bigInteger('description')->unsigned();

            $table->foreign('description')
            ->references('id')->on('translates')
            ->onDelete('cascade');

            $table->bigInteger('open_menu')->unsigned();

            $table->foreign('open_menu')
            ->references('id')->on('translates')
            ->onDelete('cascade');

            $table->bigInteger('open_menu_florida')->unsigned();

            $table->foreign('open_menu_florida')
            ->references('id')->on('translates')
            ->onDelete('cascade');

            $table->bigInteger('open_menu_aloha')->unsigned();

            $table->foreign('open_menu_aloha')
            ->references('id')->on('translates')
            ->onDelete('cascade');

            $table->string('file_common',255)->nullable();
            $table->string('file_florida',255)->nullable();
            $table->string('file_aloha',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
};