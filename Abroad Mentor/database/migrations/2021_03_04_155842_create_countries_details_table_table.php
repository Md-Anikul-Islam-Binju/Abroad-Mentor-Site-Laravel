<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesDetailsTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries_details_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('country_id')->nullable();
            $table->text('country_info')->nullable();
            $table->text('locals_info')->nullable();
            $table->text('job_opportunities_info')->nullable();
            $table->text('language_info')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('countries_details_table');
    }
}
