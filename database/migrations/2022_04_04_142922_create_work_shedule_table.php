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
        Schema::create('work_shedule', function (Blueprint $table) {
            $table->engine = 'InnoDB';
                        
            $table->bigIncrements('id');
            $table->bigInteger('shedule_description')->unsigned()->nullable();
            
            $table->foreign('shedule_description')
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
        Schema::dropIfExists('work_shedule');
    }
};
