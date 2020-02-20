<?php

namespace App\Http\Controllers\Users\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Image;
use App\Model\Favorite;

use App\Rules\EmailFormat;
use App\Rules\Password;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = User::all()->where('type','student');
        return view ('student.student_list')->with(['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('student.student_create');
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
            'email_addr' => new EmailFormat,
            'phone' => 'required',
            'birthday' => 'required|date',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'password' => new Password,
            'type' => 'nullable|max:255',
        ],
        [   
            'fname.required'    => 'first name field is required.',
            'lname.required'    => 'last name field is required.',
            'email_addr.required'    => 'The email must be a valid email address.',
            'phone.required'    => 'phone field is required.',
            'birthday.required'    => 'birthday field is required.',
            'country.required'    => 'country field is required.',
            'state.required'    => 'state field is required.',
            'city.required'    => 'city field is required.',
            'zipcode.required'    => 'zipcode field is required.',
            'password.required'    => 'password field is required.',
        
            'birthday.date'    => 'Enter a valid birthday date.',
            'password.min'    => 'Password length should be more than 8 character or digit.',
            'password.alpha_num'    => 'Password should atlear 1 digit.',
            'password.character'    => 'Password should atlear 1 character.',
        ]);

        $fname = $request->fname;
        $lname = $request->lname;
        $email_addr = $request->email_addr;
        $password = $request->password;

        $phone = $request->phone;
        $birthday = $request->birthday;
        $country = $request->country;
        $state = $request->state;
        $city = $request->city;
        $zipcode = $request->zipcode;
        $type = $request->type;

        $veri_key = md5(time().$password); // email key 
        $encrypt_pass = base64_encode($password); # encrypting password
        
        //--------   Student Panel   -----------
        $user_phone = User::where('phone',$phone)->get();
        $user_mail = User::where('email_address',$email_addr)->get();
        if ( count($user_phone) > 0 )
        {
            dd("Phone number already exist.");
        } 
        else if ( count($user_mail) > 0 )
        {
            dd ("Email address already exist.");
        }
        else
        {
            // Store user data to database
            $user = new User();

            $user->first_name = $fname;
            $user->last_name = $lname;
            $user->email_address = $email_addr;
            $user->password = $encrypt_pass;
            $user->verification_key = $veri_key;

            $user->phone = $phone;
            $user->birthday = $birthday;
            $user->country = $country;
            $user->state = $state;
            $user->city = $city;
            $user->zipcode = $zipcode;
            $user->type = $type;

            $user->save();
            
            // Send Email 
            Mail::to('thebooster786@gmail.com')->send(new SendMailable($user));
            // User Profile 

            return view ('student.student_upload_image',['id' => $user->id]);
            
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
       $student = User::findOrFail($id);
       return view("student.home")->with('student',$student);
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
        $student = User::where('id',$id)->where('type', 'student')->first();

        if ( empty($student) )
        {
            dd ("Error: Something went wrong.");
        }
        else
        {
            return view('student.edit_profile')->with(['student'=>$student]);
        }
        
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
            'fname' => 'required',
            'lname' => 'required',
            'email_addr' => new EmailFormat,
            'phone' => 'required',
            'birthday' => 'required|date',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'password' => 'required',

        ],
        [   
            'fname.required'    => 'first name field is required.',
            'lname.required'    => 'last name field is required.',
            'email_addr.required'    => 'The email must be a valid email address.',
            'phone.required'    => 'phone field is required.',
            'birthday.required'    => 'birthday field is required.',
            'country.required'    => 'country field is required.',
            'state.required'    => 'state field is required.',
            'city.required'    => 'city field is required.',
            'zipcode.required'    => 'zipcode field is required.',
            'password.required'    => 'password field is required.',
        
            'birthday.date'    => 'Enter a valid birthday date.',
            'password.min'    => 'Password length should be more than 8 character or digit.',
            'password.alpha_num'    => 'Password should atlear 1 digit.',
            'password.character'    => 'Password should atlear 1 character.',

        ]);

        $id = $request->id;

        $fname = $request->fname;
        $lname = $request->lname;
        $email_addr = $request->email_addr;
        $password = $request->password;

        $phone = $request->phone;
        $birthday = $request->birthday;
        $country = $request->country;
        $state = $request->state;
        $city = $request->city;
        $zipcode = $request->zipcode;

        $hash_pasword = md5(time().$password); // email key 

        $student = User::findOrFail($id);
    
        $student->first_name = $fname;
        $student->last_name = $lname;
        $student->email_address = $email_addr;
        $student->password = $hash_pasword;
        $student->phone = $phone;
        $student->birthday = $birthday;
        $student->country = $country;
        $student->state = $state;
        $student->city = $city;
        $student->zipcode = $zipcode;

        $student->save();
       
        return redirect()->route('student.home', ['id' => $id]);
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
        $student = User::findOrFail($id)->delete();

        return redirect()->route('student.list');
    }

    

    /**
     * Add Favorite tutor to favorite category
     *
     * @return \Illuminate\Http\Response
     */
    public function AddFavorite(Request $request, $user_id, $favorite_user_id )
    {  
        $favorite = new Favorite();

        $favorite->user_id = $user_id;
        $favorite->favorite_user_id = $favorite_user_id;
        
        $favorite->save();

        return ("Added to Favoite.");
    }
    

    /**
     * List of all Favorite tutors
     *
     * @return \Illuminate\Http\Response
     */
    public function ListFavorite(Request $request, $id)
    {  
        $favorites =  Favorite::where('user_id',$id)->get();

        if (count ($favorites) > 0)
        {
            foreach ($favorites as $favorite)
            {
                $item = new \stdClass();
                $item = User::where('id',$favorite->favorite_user_id)->first();
                
                $items[] = clone $item;
                
            }
            // dd($items[1]->id);
            // dd ($favorite[0]->id);
            // dd ($user->favorites);

            return view('tutor.favorite')->with(['items'=> $items]);
        }
        else
        {
            dd ("Your Favorite list is empty.");
        }
    }

     /**
     * Upload user profile Image
     *
     * @return \Illuminate\Http\Response
     */
    public function UploadPicture(Request $request )
    {  
       
        $request->validate([
            'selected_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],
        [   
            'selected_file.image'    => 'file should be image type.',
        ]);

        $id = $request->input('id');
        $file = $request->file('selected_file');
        
        $new_name = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("images"), $new_name );
        
        $image = new Image();
        
        $image->user_id = $id;
        $image->name = $new_name;
        $image->path = "images";
        
        $image->save();
        
        return redirect()->route('student.list');
    }

     /**
     * Student Dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard(Request $request )
    {
        $user_id = $request->session()->get('session_student_id');
        $user_type = $request->session()->get('session_student_type');

        $user = User::findOrFail($user_id);
        if ($user->type == "student")
        {
            return view ('theme.student.student_dashboard')->with(['user' => $user]);
        }
    }
}
