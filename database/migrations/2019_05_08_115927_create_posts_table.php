<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
      Schema::create('posts', function (Blueprint $table) {
        $table->increments('id')->unsigned();
        $table->string('name'); 
        $table->string('slug')->nullable(); 
        $table->double('price');  
        $table->text('description'); 
        $table->string('location'); 
        $table->string('main_image')->nullable(); 
        $table->integer('room');
        $table->integer('number_of_bedroom');  
        $table->integer('number_of_bathroom'); 
        $table->double('area'); 
        $table->integer('property_type_id')->unsigned(); 
        $table->integer('building_age'); 
        $table->boolean('transaction_type');
        $table->boolean('status');
        $table->boolean('hide')->nullable();
        $table->integer('user_id')->unsigned(); 
        $table->foreign('property_type_id')->references('id')->on(
       'property_types')->onDelete('cascade');
        $table->foreign('user_id')->references('id')->on(
       'users')->onDelete('cascade');
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('posts');
    }
  }
