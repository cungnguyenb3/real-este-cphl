<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('users', function (Blueprint $table) {
        $table->increments('id')->unsigned();
        $table->string('username')->unique();
        $table->string('first_name')->nullable();
        $table->string('last_name')->nullable();
        $table->boolean('gender')->nullable();
        $table->string('email')->unique();
        $table->double('phone')->nullable();
        $table->string('address')->nullable();
        $table->string('password');
        $table->integer('role_id')->unsigned();
        $table->timestamp('email_verified_at')->nullable();
        $table->rememberToken();
        $table->timestamps();
        $table->foreign('role_id')->references('id')->on(
       'user_roles')->onDelete('cascade');
      });
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
