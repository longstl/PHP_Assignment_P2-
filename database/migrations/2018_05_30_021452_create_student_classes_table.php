<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_classes', function (Blueprint $table) {
            $table->string("rollNumber");
            $table->string("class_id");
            $table->date("created_at")->format("dd/mm/yyyy");
            $table->integer("status")->default("1");
            $table->foreign("rollNumber")->references("rollNumber")->on("students");
            $table->foreign("class_id")->references("class_id")->on("classes");
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
        Schema::dropIfExists('student_classes');
    }
}
