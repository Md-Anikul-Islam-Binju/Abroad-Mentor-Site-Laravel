<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkflowTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workflow_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('online_assessment')->nullable();
            $table->text('invited_to_meet')->nullable();
            $table->text('application_process_initiated')->nullable();
            $table->text('application_submitted')->nullable();
            $table->text('visa_submitted')->nullable();
            $table->text('flights_booked')->nullable();
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
        Schema::dropIfExists('workflow_table');
    }
}
