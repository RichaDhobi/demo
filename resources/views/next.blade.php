@extends('layouts.app')
@section('content')

    {{ __(' Subjects') }}


    <select class="subject">
        <option>Select Subject</option>
        @foreach ($showSubjects as $key => $showSubject)
            <option value="{{ $key }}">{{ $showSubject->name }}</option>
        @endforeach
    </select>
    <br />
    <br />
    <div id="maths" style="display: none;">
        <form method="post" action="{{ url('/getMathsQuestion') }}">
            @csrf
            <?php
            $i = 1;
            $j = 1;
            ?>
            @foreach ($showQuestionAnswers as $showQuestionAnswer)
                @if ($showQuestionAnswer->sub_id == 1)
                    <div class="row">
                        <div class="col-md-6">

                            <label>({{ $i++ }}){{ $showQuestionAnswer->quation }}</label>
                            <input type="radio" name="ans{{ $j }}"
                                value="{{ $showQuestionAnswer->op_1 }}">{{ $showQuestionAnswer->op_1 }}
                            <input type="radio" name="ans{{ $j }}"
                                value="{{ $showQuestionAnswer->op_2 }}">{{ $showQuestionAnswer->op_2 }}
                            <input type="radio" name="ans{{ $j }}"
                                value="{{ $showQuestionAnswer->op_3 }}">{{ $showQuestionAnswer->op_3 }}
                            <input type="radio" name="ans{{ $j }}"
                                value="{{ $showQuestionAnswer->op_4 }}">{{ $showQuestionAnswer->op_4 }}
                        </div>

                    </div>
                    <?php $j++; ?>
                @endif
            @endforeach
            <div class="col-md-12">
                <input type="submit" name="maths_submit" value="Submit">
            </div>
        </form>
    </div>
    <div id="sceince" style="display: none;">
        <form method="post" action="{{ url('/getSceinceQuestion') }}">
            @csrf
            <?php
            $i = 1;
            $j = 1;
            ?>
            @foreach ($showQuestionAnswers as $showQuestionAnswer)
                @if ($showQuestionAnswer->sub_id == 2)
                    <div class="row">
                        <div class="col-md-6">

                            <label>({{ $i++ }}){{ $showQuestionAnswer->quation }}</label>
                            <input type="radio" name="ans{{ $j }}"
                                value="{{ $showQuestionAnswer->op_1 }}">{{ $showQuestionAnswer->op_1 }}
                            <input type="radio" name="ans{{ $j }}"
                                value="{{ $showQuestionAnswer->op_2 }}">{{ $showQuestionAnswer->op_2 }}
                            <input type="radio" name="ans{{ $j }}"
                                value="{{ $showQuestionAnswer->op_3 }}">{{ $showQuestionAnswer->op_3 }}
                            <input type="radio" name="ans{{ $j }}"
                                value="{{ $showQuestionAnswer->op_4 }}">{{ $showQuestionAnswer->op_4 }}
                        </div>

                    </div>
                    <?php $j++; ?>
                @endif
            @endforeach
            <div class="col-md-12">
                <input type="submit" name="science_submit" value="Submit">
            </div>
        </form>
    </div>
    <div id="english" style="display: none;">
        <form method="post" action="{{ url('/getEnglishQuestion') }}">
            @csrf
            <?php
            $i = 1;
            $j = 1;
            ?>
            @foreach ($showQuestionAnswers as $showQuestionAnswer)
                @if ($showQuestionAnswer->sub_id == 3)
                    <div class="row">
                        <div class="col-md-6">

                            <label>({{ $i++ }}){{ $showQuestionAnswer->quation }}</label>
                            <input type="radio" name="ans{{ $j }}"
                                value="{{ $showQuestionAnswer->op_1 }}">{{ $showQuestionAnswer->op_1 }}
                            <input type="radio" name="ans{{ $j }}"
                                value="{{ $showQuestionAnswer->op_2 }}">{{ $showQuestionAnswer->op_2 }}
                            <input type="radio" name="ans{{ $j }}"
                                value="{{ $showQuestionAnswer->op_3 }}">{{ $showQuestionAnswer->op_3 }}
                            <input type="radio" name="ans{{ $j }}"
                                value="{{ $showQuestionAnswer->op_4 }}">{{ $showQuestionAnswer->op_4 }}
                        </div>

                    </div>
                    <?php $j++; ?>
                @endif
            @endforeach
            <div class="col-md-12">
                <input type="submit" name="englis_submit" value="Submit">
            </div>
        </form>
    </div>
@endsection
