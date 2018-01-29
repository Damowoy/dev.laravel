<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email',128)->unique();
            $table->string('password');
            $table->integer('rolle_id');
            $table->rememberToken();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
        
        
        /*Schema::table('users', function($table) {
            $table->foreign('rolle_id')->references('id')->on('rolle');
        });*/
        
        
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
