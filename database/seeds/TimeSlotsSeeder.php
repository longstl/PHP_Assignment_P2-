<?php

use Illuminate\Database\Seeder;

class TimeSlotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("timeslots")->insert([
            ['slot_id' => "1",
            'time_class' => "8h-12h"],
            ['slot_id' => "2",
                'time_class' => "13h30-17h30"]
        ]);
    }
}
