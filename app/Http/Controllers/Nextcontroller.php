<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marks;
use Illuminate\Support\Facades\View;
class Nextcontroller extends Controller
{
    public function index(Request $request){

    	return view('next');
    }

    public function save_maths(Request $request,Marks $marks) {
		    	$datas = Marks::all();
	
		    	$first_ans= $request->input('first_ans');
		    	$second_ans= $request->input('second_ans');
		    	$third_ans= $request->input('third_ans');
		    	$fourth_ans= $request->input('fourth_ans');
		    	$show=0;
		    	foreach ($datas as $data ) {

		    		if($data['first_ans']==$first_ans){
		    			
		    			$show++;
		    	}if($data['second_ans']==$second_ans){
		    			
		    			$show++;
		    	}if($data['third_ans']==$third_ans){
		    			
		    			$show++;
		    	}if($data['fourth_ans']==$fourth_ans){
		    			
		    			$show++;
		    	}
		    }
    	return view('result', ['result' => $show,'subject' => 'maths']);
    }
    public function save_sceince(Request $request,Marks $marks) {
			    	$datas = Marks::all();
			    	
			    	$first_ans= $request->input('first_ans');
			    	$second_ans= $request->input('second_ans');
			    	$third_ans= $request->input('third_ans');
			    	$fourth_ans= $request->input('fourth_ans');
			    	$show=0;
			    	foreach ($datas as $data ) {

			    		if($data['first_ans']==$first_ans){
			    			
			    			$show++;
			    	}if($data['second_ans']==$second_ans){
			    			
			    			$show++;
			    	}if($data['third_ans']==$third_ans){
			    			
			    			$show++;
			    	}if($data['fourth_ans']==$fourth_ans){
			    			
			    			$show++;
			    	}
			    }
			    return view('result', ['result' => $show,'subject' => 'sceince']);
    }
    public function save_english(Request $request,Marks $marks) {
			    	$datas = Marks::all();
			    	
			    	$first_ans= $request->input('first_ans');
			    	$second_ans= $request->input('second_ans');
			    	$third_ans= $request->input('third_ans');
			    	$fourth_ans= $request->input('fourth_ans');
			    	$show=0;
			    	foreach ($datas as $data ) {

			    		if($data['first_ans']==$first_ans){
			    			
			    			$show++;
			    	}if($data['second_ans']==$second_ans){
			    			
			    			$show++;
			    	}if($data['third_ans']==$third_ans){
			    			
			    			$show++;
			    	}if($data['fourth_ans']==$fourth_ans){
			    			
			    			$show++;
			    	}
			    }
			    return view('result', ['result' => $show,'subject' => 'english']);
	}
}
