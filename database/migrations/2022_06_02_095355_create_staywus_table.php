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
        Schema::create('staywus', function (Blueprint $table) {
            $table->engine = 'InnoDB';
                        
            $table->integer('id');
            
            $table->string('servis',255);
            $table->string('market',255);
            $table->string('num1',255);
            $table->string('num2',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staywus');
    }
};