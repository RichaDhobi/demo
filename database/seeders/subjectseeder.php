<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Subject_table;

class subjectseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $saveSubjects = [
            ['id' => 1, 'name' => 'Maths'],
            ['id' => 2, 'name' => 'Sceince'],
            ['id' => 3, 'name' => 'English']
        ];
        foreach ($saveSubjects as $savesubject) {
            Subject_table::updateOrCreate(['name' => $savesubject['name']], $savesubject);
        }
    }
}
