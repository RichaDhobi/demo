<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Question_Answer;

class Que_ansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $saveQuestionAnswers = [
            [
                'id' => 1, 'sub_id' => 1, 'quation' => '1*10=_____',
                'op_1' => '10', 'op_2' => '200', 'op_3' => '10000',
                'op_4' => '-1', 'ans' => '10'
            ],
            [
                'id' => 2, 'sub_id' => 1, 'quation' => '10/10=_____',
                'op_1' => '1', 'op_2' => '2000', 'op_3' => '100',
                'op_4' => '13', 'ans' => '1'
            ],
            [
                'id' => 3, 'sub_id' => 1, 'quation' => '10-1=_____',
                'op_1' => '9', 'op_2' => '-9', 'op_3' => '8',
                'op_4' => '7', 'ans' => '9'
            ],
            [
                'id' => 4, 'sub_id' => 1, 'quation' => '10+10=_____',
                'op_1' => '70', 'op_2' => '20', 'op_3' => '80',
                'op_4' => '40', 'ans' => '20'
            ],
            [
                'id' => 5, 'sub_id' => 1, 'quation' => '100*10=_____',
                'op_1' => '1000', 'op_2' => '240', 'op_3' => '100',
                'op_4' => '1', 'ans' => '1000'
            ],
            [
                'id' => 6, 'sub_id' => 2, 'quation' => 'H+o2=_____',
                'op_1' => 'H2o', 'op_2' => 'Ho2', 'op_3' => '20h',
                'op_4' => 'null', 'ans' => 'H2o'
            ],
            [
                'id' => 7, 'sub_id' => 2, 'quation' => 'which one Hidrozenoxisde =_____',
                'op_1' => 'H2so4', 'op_2' => 'h2', 'op_3' => 'h2o6',
                'op_4' => 'null', 'ans' => 'H2so4',
            ],
            [
                'id' => 8, 'sub_id' => 2, 'quation' => 'which one is oxygen=_____',
                'op_1' => 'o2', 'op_2' => 'o3', 'op_3' => 'o4',
                'op_4' => 'op', 'ans' => 'o2'
            ],
            [
                'id' => 9, 'sub_id' => 2, 'quation' => 'which one is Hidrozen=_____',
                'op_1' => 'H', 'op_2' => 'ou', 'op_3' => 'oz',
                'op_4' => 'op', 'ans' => 'H'
            ],
            [
                'id' => 10, 'sub_id' => 2, 'quation' => 'Which one is carbondioxide=________',
                'op_1' => 'd2', 'op_2' => 'co2', 'op_3' => 'Do2',
                'op_4' => 'g2', 'ans' => 'co2'
            ],
            [
                'id' => 11, 'sub_id' => 3, 'quation' => 'I_____Richa',
                'op_1' => 'am', 'op_2' => 'ma', 'op_3' => 'is',
                'op_4' => 'it', 'ans' => 'am'
            ],
            [
                'id' => 12, 'sub_id' => 3, 'quation' => 'Water is_____',
                'op_1' => 'life', 'op_2' => 'die', 'op_3' => 'Insurence',
                'op_4' => 'document', 'ans' => 'life'
            ],
            [
                'id' => 13, 'sub_id' => 3, 'quation' => 'Which one is Animal?=_____',
                'op_1' => 'Fox', 'op_2' => 'crow', 'op_3' => 'peaock',
                'op_4' => 'Swan', 'ans' => 'Fox'
            ],
            [
                'id' => 14, 'sub_id' => 3, 'quation' => 'Which one is Bird=_____',
                'op_1' => 'Tiger', 'op_2' => 'Got', 'op_3' => 'sparrow',
                'op_4' => 'Buffelow', 'ans' => 'sparrow'
            ],
            [
                'id' => 15, 'sub_id' => 3, 'quation' => 'Which is not  Patanimal=________',
                'op_1' => 'cow', 'op_2' => 'Dog', 'op_3' => 'Lion',
                'op_4' => 'Cat', 'ans' => 'Lion'
            ],
        ];
        foreach ($saveQuestionAnswers as $saveQuestionAnswer) {

            Question_Answer::updateOrCreate(
                [
                    'sub_id' => $saveQuestionAnswer['sub_id'],
                    'quation' => $saveQuestionAnswer['quation'],
                    'op_1' => $saveQuestionAnswer['op_1'],
                    'op_2' => $saveQuestionAnswer['op_2'],
                    'op_3' => $saveQuestionAnswer['op_3'],
                    'op_4' => $saveQuestionAnswer['op_4'],
                    'ans' => $saveQuestionAnswer['ans']
                ],
                $saveQuestionAnswer
            );
        }
    }
}
