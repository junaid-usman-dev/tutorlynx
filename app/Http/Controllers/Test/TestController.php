<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Test;
use App\Model\TestUser;
use App\User;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tests  = Test::all();
        return view ('test.test_list')->with(['tests'=>$tests]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ("test.test_create");
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
            'name' => 'required',
            'description' => 'required',
        ]);

        $name = $request->input('name');
        $description = $request->input('description');

        $test = new Test();

        $test->name = $name;
        $test->description = $description;

        $test->save();

        return view ('test.question.question_create')->with([ 'test_id'=>$test->id ]);

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
        $test = Test::findOrFail($id);
        return view ('test.test_edit')->with(['test'=>$test]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request->validate([
            'name'=> 'required',
            'description'=> 'required',
        ]);

        $id = $request->input('id');
        $name = $request->input('name');
        $description = $request->input('description');

        $test = Test::findOrFail($id);
        if ( empty($test) )
        {
            dd ("Something went wrong.");
        }
        else
        {
            $test->name = $name;
            $test->description = $description;

            $test->save();

            return redirect('admin/test/list');
        }
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
        $test = Test::findOrFail($id)->delete();
        return redirect('admin/test/list');
    }

    /**
     * Show Test Result for specific tutor
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function TutorResult(Request $request)
    {
        //
        $user_id = '7';
        $test_id = '3';

        $results = User::findOrFail($user_id);
        dd ($results);
        return view ('tutor.test.test_result')->with([ 'results'=>$results ]);
    }
}
