<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('student_type_id');
            $table->string('student_number');
            $table->string('EnrolledDate');
            $table->double('Prelim', 15,2);
            $table->double('Midterm', 15,2);
            $table->double('SemiFinal', 15,2);
            $table->double('Final', 15,2);
            $table->double('Tuition', 15,2);
            $table->string('Status');
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
        Schema::dropIfExists('students');
    }
}
