<?php

use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("classes")->insert([
            ['class_id' => "T1707M",
                'created_date' => date("y-m-d"),
            ],
            ['class_id' => "T1708M",
                'created_date' => date("y-m-d"),
            ],
            ['class_id' => "T1708A",
                'created_date' => date("y-m-d"),
            ]
        ]);
    }
}
