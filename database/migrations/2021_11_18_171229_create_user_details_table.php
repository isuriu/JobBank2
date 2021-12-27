<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('full_name')->nullable();
            $table->string('name_in_katakana')->nullable();
            $table->string('email')->unique();
            $table->text('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('nationality')->nullable();
            $table->string('country_status')->nullable();
            $table->string('contact')->nullable();
            $table->string('organization_type_jp')->nullable();
            $table->string('organization_jp')->nullable();
            $table->string('degree_jp')->nullable();
            $table->integer('grad_year_jp')->nullable();
            $table->string('grad_month_jp')->nullable();
            $table->string('organization_type_foreign')->nullable();
            $table->string('organization_foreign')->nullable();
            $table->string('degree_foreign')->nullable();
            $table->integer('grad_year_foreign')->nullable();
            $table->string('grad_month_foreign')->nullable();
            $table->integer('is_experience')->default(0);
            $table->integer('experience')->default(0); //no. of years
            $table->string('jap_ability')->nullable();
            $table->string('jap_level')->nullable();
            $table->string('english_ability')->nullable();
            $table->string('english_level')->nullable();
            $table->text('other_languages')->nullable();
            $table->text('other_qualifications')->nullable();
            $table->string('desired_industry')->nullable();
            $table->string('desired_ocupation')->nullable();
            $table->string('dev_languages')->nullable();
            $table->string('os')->nullable();
            $table->string('db')->nullable();
            $table->string('other_softwares')->nullable();
            $table->text('categories')->nullable();
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
        Schema::dropIfExists('user_details');
    }
}
