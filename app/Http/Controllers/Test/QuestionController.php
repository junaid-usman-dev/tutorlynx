<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('test.question.question_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'test_id' => 'required',
            'question_desc' => 'required',
            'option_1' => 'required',
            'option_2' => 'required',
            'option_3' => 'required',
            'option_4' => 'required',
            'answer' => 'required',
        ]);

        $test_id = $request->input('test_id');
        
        $question_desc = $request->input('question_desc');
        $option_1 = $request->input('option_1');
        $option_2 = $request->input('option_2');
        $option_3 = $request->input('option_3');
        $option_4 = $request->input('option_4');
        $answer = $request->input('answer');

        $question = new Question();

        $question->test_id = $test_id;
    
        $question->question = $question_desc;
        $question->option_1 = $option_1;
        $question->option_2 = $option_2;
        $question->option_3 = $option_3;
        $question->option_4 = $option_4;
        $question->answer = $answer;

        $question->save();

        // return ("A new question has been added.");
        
        return view('test.question.question_create')->with([ 'test_id'=>$test_id ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
