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
        Schema::create('tickets', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');

            $table->bigInteger('ticket_title')->unsigned()->nullable();
            $table->bigInteger('short_description')->unsigned()->nullable();
            $table->enum('status',['0','1'])->default(1);
            $table->bigInteger('adult_ticket')->unsigned()->nullable();
            $table->float('adult_actual_price')->default(0);
            $table->float('adult_old_price')->default(0);
            $table->bigInteger('child_ticket')->unsigned()->nullable();
            $table->float('child_actual_price')->default(0);
            $table->float('child_old_price')->default(0);
            $table->bigInteger('large_description')->unsigned()->nullable();
            $table->enum('category_id',['0','1','2','3'])->default(1);
            
            $table->foreign('ticket_title')
                  ->references('id')->on('translates')
                  ->onDelete('cascade');

            $table->foreign('short_description')
                  ->references('id')->on('translates')
                  ->onDelete('cascade');

            $table->foreign('large_description')
                  ->references('id')->on('translates')
                  ->onDelete('cascade');

            $table->foreign('adult_ticket')
                  ->references('id')->on('translates')
                  ->onDelete('cascade');

            $table->foreign('child_ticket')
                  ->references('id')->on('translates')
                  ->onDelete('cascade');

                  

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};