<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendenceSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendence__slots', function (Blueprint $table) {
            $table->increments('id');
            $table->string("class_id");
            $table->integer("slot_id");
            $table->string("subject_id");
            $table->date("attendent_date")->format("d:m:y");
            $table->foreign("slot_id")->refernces("slot_id")->on("timeslots");
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
        Schema::dropIfExists('attendence__slots');
    }
}
