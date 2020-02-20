<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Admin;
use App\User;
// use App\Image;
use App\Model\Subject;
use App\Model\Test;

use App\Rules\EmailFormat; // Custom Rules for Email
use App\Rules\Password; // Custom Rules for Password

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        //
        // $students = array();
        $students = User::orderBy('created_at','desc')->where('type','student')->get();
        $tutors = User::orderBy('created_at','desc')->where('type','tutor')->get();
        $subjects = Subject::all();
        $tests = Test::orderBy('created_at','desc')->get();

        return view ('theme.admin.admin_dashboard')->with([
            'students'=>$students,
            'tutors'=>$tutors,
            'subjects'=>$subjects,
            'tests'=>$tests,
            ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admins = Admin::all();
        return view ('theme.admin.admin_manager')->with(['admins'=>$admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('theme.admin.create_admin');
    }

    /**
     * Login a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function AdminLogin(Request $request)
    {
        //
        // $request->validate($request,[ 
        //     'email'=> 'required',
        //     'password'=> 'required',
        // ]);
        
        $email = $request->input('email');
        $password = $request->input('password');

        $encrypt_pass =  base64_encode($password);

        $user = Admin::where('email_address',$email)->where('password',$encrypt_pass)->get();
        if (count($user) > 0)
        {
            // Login
            // put data into session
            $admin_id = $user[0]->id;
            $admin_email = $user[0]->email;
            $this->StoreSession($request, $admin_id, $admin_email);

            return response()->json([
                'success' => 'Go to home page.'
            ]); 

        }
        else
        {
            // Error
            // dd ("Unknown Email or Password.");
            return response()->json([
                'error' => 'Unknown Email or Password.'
            ]); 
        }

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
            'fname' => 'required',
            'lname' => 'required',
            'email' => new EmailFormat,
            'password' => new Password,
        ],
        [
            'fname.required' => 'first name field is required.',
            'lname.required' => 'last name field is required.',
            'email.required' => 'email field is required.',
            'password.required' => 'password field is required.',
        ]);
        // dd ("store");

        $first_name = $request->input('fname');
        $last_name = $request->input('lname');
        $email = $request->input('email');
        $password = $request->input('password');
        
        $encrypt_pass = base64_encode($password); # encrypting password
        
        $admin = new Admin ();

        $admin->first_name = $first_name;
        $admin->last_name = $last_name;
        $admin->email_address = $email;
        $admin->password = $encrypt_pass;
        $admin->block = "0";
        $admin->active = "0";
        // $admin->type = "admin";
        
        $admin->save();
        
        return redirect()->to("/admin/list");
    
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
        $admin = Admin::findOrFail($id);
        return view('theme.admin.admin_edit')->with(['admin'=>$admin]);
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
        $admin = Admin::findOrFail($request->input('id'));
      
        $admin->first_name = $request->input('fname');
        $admin->last_name = $request->input('lname');
        $admin->email_address = $request->input('email');
        $admin->password = $request->input('password');
        
        $admin->save();

        return redirect()->to("/admin/list");
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
        // dd ('delete admin user');
        $admin = Admin::findOrFail($id)->delete();
        return redirect()->route("admin.list");
    }


    /**
     * Logout the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        //
        $request->session()->flush();
        return redirect()->route('admin.signin');
        // return ("Session has been deleted.");
    }


    /**
     * Session Keys for specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function StoreSession(Request $request, $admin_id, $admin_email)
    {
        //
        $request->session()->put('session_admin_id', $admin_id);
        $request->session()->put('session_admin_email', $admin_email);
    }
    
}
