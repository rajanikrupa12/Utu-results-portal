<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiplomaEESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diploma_e_e_s', function (Blueprint $table) {
            $table->id();
            $table->string('enrollment_no')->nullable();
            $table->text('photo')->nullable();
            $table->string('student')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('student_moblie')->nullable();
            $table->string('email')->nullable();
            $table->string('last_degree_name')->nullable();
            $table->string('last_degree_per')->nullable();
            $table->string('last_college_name')->nullable();
            $table->text('permanent_address')->nullable();
            $table->text('local_address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_moblie')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_number')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_moblie')->nullable();
            $table->string('admission_date')->nullable();
            $table->string('cast')->nullable();
            $table->string('sub_cast')->nullable();
            $table->string('blood_group')->nullable();
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
        Schema::dropIfExists('diploma_e_e_s');
    }
}
