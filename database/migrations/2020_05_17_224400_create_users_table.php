<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default('user');
            $table->string('image')->default('/storage/photos/shares/noimage.jpg');
            $table->string('Nom')->nullable();
            $table->string('Prenom')->nullable();
            $table->date('Date_naissance')->nullable();
            $table->boolean('sexe')->nullable();
            $table->string('CIN')->nullable()->nullable();
            $table->string('Adresse')->nullable();
            $table->integer('Tel')->nullable();
            $table->boolean('confirmed')->default(false);
            $table->integer('confirmation_code')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
