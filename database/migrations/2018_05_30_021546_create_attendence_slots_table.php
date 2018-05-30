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
        Schema::create('attendence_slots', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("slot_id");
            $table->string("rollNumber");
            $table->date("create_at")->format("dd/mm/yyyy");
            $table->integer("status")->default("1");
            $table->foreign("rollNumber")->references("rollNumber")->on("students");
            $table->foreign("slot_id")->references("slot_id")->on("timeslots");
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
        Schema::dropIfExists('attendence_slots');
    }
}
