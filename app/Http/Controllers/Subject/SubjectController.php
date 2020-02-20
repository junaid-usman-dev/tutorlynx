<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subjects = Subject::all();
        return view ('subjects.subject_list')->with(['subjects'=>$subjects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("subjects.subject_create");
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

        $name = $request->input("name");
        $description = $request->input("description");

        $already_exist = Subject::where('name',$name)->get();

        if ( count($already_exist) > 0 )
        {
            dd ("Error: Subject already exist."); 
        }
        else
        {
            $subject = new Subject();
            $subject->name = $name;
            $subject->description = $description;

            $subject->save();

            return ("A new subject has been created"); 
        }
        
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
        $subject  = Subject::findOrFail($id);
        return view("subjects.subject_edit")->with(['subject'=>$subject]);
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
        $id = $request->input('id');
        $name = $request->input('name');
        $description = $request->input('description');

        $subject  = Subject::findOrFail($id);

        if ( !empty($subject) )
        {
            $subject->name = $name;
            $subject->description = $description;

            $subject->save();

            return redirect()->route('subject.list');
        }
        else
        {
            dd("Error: Subject not found.");
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
        $subject  = Subject::findOrFail($id)->delete();

        return redirect()->route('subject.list');
    }
}
