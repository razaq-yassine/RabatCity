<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateThemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('themes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Theme_id');
            $table->string('Theme_type');
            $table->string('Theme_intitule')->unique();
            $table->string('Theme_image');
            $table->string('Theme_description');
            $table->boolean('Theme_archiver')->default(1);
            $table->timestamps();
        });
        DB::statement("ALTER TABLE themes ADD CONSTRAINT chk_theme_type check (Theme_type in ('services','activites','rabat','actualites','commune','evenement'))");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('themes');
    }
}
