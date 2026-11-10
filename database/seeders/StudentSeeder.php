<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;



class StudentSeeder extends Seeder
{
public function run()
{
    Student::factory(10)->create();
}

    /**
     * Run the database seeds.
     */

}
