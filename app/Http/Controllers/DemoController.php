<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question_Answer;
use App\Models\Subject_table;

use DB;


class DemoController extends Controller
{
    public function index(Request $request)
    {
        $showSubjects = Subject_table::all();
        $showQuestionAnswers = Question_Answer::all();
        // $subject = DB::table('subject')->pluck("subject_name", "id");
        // $que_ans = DB::table('que_ans')->get();
        return view('next', compact('showSubjects', 'showQuestionAnswers'));
    }
    public function getMathsQuestion(Request $request)
    {
        $showQuestionAnswers = Question_Answer::all();

        $first_ans = $request->ans1;
        $second_ans = $request->ans2;
        $third_ans = $request->ans3;
        $fourth_ans = $request->ans4;
        $fifth_ans = $request->ans5;
        $show = 0;
        foreach ($showQuestionAnswers as $showQuestionAnswer) {

            if ($showQuestionAnswer->ans == $first_ans) {

                $show++;
            }
            if ($showQuestionAnswer->ans == $second_ans) {

                $show++;
            }
            if ($showQuestionAnswer->ans == $third_ans) {

                $show++;
            }
            if ($showQuestionAnswer->ans == $fourth_ans) {

                $show++;
            }
            if ($showQuestionAnswer->ans == $fifth_ans) {

                $show++;
            }
        }

        return view('result', ['result' => $show, 'subject' => 'maths']);
    }
    public function getSceinceQuestion(Request $request)
    {
        $showQuestionAnswers = Question_Answer::all();


        $first_ans = $request->ans1;
        $second_ans = $request->ans2;
        $third_ans = $request->ans3;
        $fourth_ans = $request->ans4;
        $fifth_ans = $request->ans5;
        $show = 0;
        foreach ($showQuestionAnswers as $showQuestionAnswer) {

            if ($showQuestionAnswer->ans == $first_ans) {

                $show++;
            }
            if ($showQuestionAnswer->ans == $second_ans) {

                $show++;
            }
            if ($showQuestionAnswer->ans == $third_ans) {

                $show++;
            }
            if ($showQuestionAnswer->ans == $fourth_ans) {

                $show++;
            }
            if ($showQuestionAnswer->ans == $fifth_ans) {

                $show++;
            }
        }
        return view('result', ['result' => $show, 'subject' => 'sceince']);
    }
    public function getEnglishQuestion(Request $request)
    {
        $showQuestionAnswers = Question_Answer::all();


        $ans = array();
        $ans[0] = $request->ans1;
        $ans[1] = $request->ans2;
        $ans[2] = $request->ans3;
        $ans[3] = $request->ans4;
        $ans[4] = $request->ans5;
        // print_r($ans);
        // die;
        $show = 0;
        $wrongAns = 5;
        for ($i = 0; $i < count($showQuestionAnswers); $i++) {


            if ($showQuestionAnswers[$i]['sub_id'] == 3) {

                for ($j = 0; $j < count($ans); $j++) {

                    if ($showQuestionAnswers[$i]['ans'] == $ans[$j]) {
                        $show++;
                        $wrongAns = $wrongAns - 1;
                    }
                }
            }
        }
        return view('result', ['result' => $show, 'wrongResult' => $wrongAns, 'subject' => 'english']);
    }
}
