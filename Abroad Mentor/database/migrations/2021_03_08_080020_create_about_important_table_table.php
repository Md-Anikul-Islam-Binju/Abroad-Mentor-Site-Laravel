<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutImportantTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_important_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('total_countries');
            $table->integer('total_project');
            $table->integer('total_universities');
            $table->integer('total_courses');
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
        Schema::dropIfExists('about_important_table');
    }
}
