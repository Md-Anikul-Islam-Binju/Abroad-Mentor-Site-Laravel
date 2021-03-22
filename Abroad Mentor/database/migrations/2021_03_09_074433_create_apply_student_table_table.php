<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyStudentTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_student_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->integer('age')->nullable();
            $table->string('other_country_name')->nullable();
            $table->integer('united_kingdom')->nullable();
            $table->integer('united_state')->nullable();
            $table->integer('canada')->nullable();
            $table->integer('newzealand')->nullable();
            $table->integer('sweden')->nullable();
            $table->integer('denmark')->nullable();
            $table->integer('malaysia')->nullable();
            $table->integer('china')->nullable();
            $table->integer('germany')->nullable();
            $table->integer('other')->nullable();
            $table->integer('ssc')->nullable();
            $table->integer('o_level')->nullable();
            $table->integer('hsc')->nullable();
            $table->integer('a_level')->nullable();
            $table->integer('diploma')->nullable();
            $table->integer('honours')->nullable();
            $table->integer('masters')->nullable();  
            $table->integer('phd')->nullable();
            $table->integer('none')->nullable();
            $table->integer('dhaka')->nullable();
            $table->integer('chittagong')->nullable();
            $table->integer('sylhet')->nullable();
            $table->integer('rajshahi')->nullable();
            $table->integer('khulna')->nullable();
            $table->integer('barisal')->nullable();
            $table->integer('mymensingh')->nullable();  
            $table->integer('rangpur')->nullable();

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
        Schema::dropIfExists('apply_student_table');
    }
}
