<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('Article_id');
            $table->string('Article_titre');
            $table->string('Article_image');
            $table->longText('Article_text');
            $table->integer('Article_vue')->default(0);
            $table->boolean('Article_archiver')->default(1);
            $table->boolean('Article_home1')->default(1);
            $table->boolean('Article_home2')->default(1);
            $table->integer('Categorie_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('articles', function (Blueprint $table) {
        $table->foreign('Categorie_id')->references('Categorie_id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
