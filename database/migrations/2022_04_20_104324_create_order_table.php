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
        Schema::create('order', function (Blueprint $table) 
        {
            $table->engine = 'InnoDB';
            
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            
            $table->enum('status',['0','1'])->default(0);
            
            $table->string('name');  
            $table->string('email');  
            $table->string('phone_number'); 

            $table->string('payment_type');
            $table->string('client_ip');

            $table->string('ticket_title');
            
            $table->float('adult_price');
            $table->float('adult_number');
            
            $table->float('child_price');
            $table->float('child_number');

            $table->float('total');

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
        Schema::dropIfExists('order');
    }
};  