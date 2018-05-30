<?php

use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("students")->insert([
            ['rollNumber' => "A001",
                'name' => "Khanh"],
            ['rollNumber' => "A002",
                'name' => "Long"]
        ]);
    }
}
