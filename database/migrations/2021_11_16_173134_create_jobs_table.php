<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->unique();
            $table->text('job_title');
            $table->text('job_description')->nullable();
            $table->string('job_location')->nullable();
            $table->string('expected_salary')->nullable();
            $table->text('company_name')->nullable();
            $table->text('categories')->nullable();
            $table->string('job_type')->nullable();
            $table->date('closing_date');
            $table->text('requirements')->nullable();
            $table->text('key_words')->nullable();
            $table->string('create_user');
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
        Schema::dropIfExists('jobs');
    }
}
