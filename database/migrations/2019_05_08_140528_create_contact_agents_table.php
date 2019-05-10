<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('contact_agents', function (Blueprint $table) {
        $table->increments('id')->unsigned();
        $table->string('name');
        $table->string('email');
        $table->double('phone');
        $table->text('content');
        $table->integer('post_id')->unsigned();
        $table->foreign('post_id')->references('id')->on(
       'posts')->onDelete('cascade');
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
      Schema::dropIfExists('contact_agents');
    }
  }
