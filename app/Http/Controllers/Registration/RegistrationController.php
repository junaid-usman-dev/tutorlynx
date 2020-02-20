<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Laravel\Socialite\Facades\Socialite; // Social Account Integration package
use Illuminate\Support\Facades\Mail;
use Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;



use App\User;
use App\Tutor;
use App\ProfileTutor;
use App\Image;
use App\Payment;

use App\Rules\EmailFormat; // Custom Rules for Email
use App\Rules\Password; // Custom Rules for Password

use App\Mail\SendMailable;
use App\Mail\ResetPasswordMail;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('theme/register/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('theme/register/signup');
    }

    public function home(Request $request)
    {
        // if ( empty($request->session()->get('user_id')) )
        // {
            // Session is not expire
            $name = $request->input('user');
            $pass = $request->input('password');

            $remember_me = $request->input('remember');

            // dd ($remember_me);

            // $type = $request->type;
            // $encrypt_pass = $pass;
            // $encrypt_pass =  base64_encode($pass);
            // $encrypt_pass = Crypt::encryptString($pass);
            // $decrypted = Crypt::decryptString($encrypted);
            // dd ($encrypt_pass);
            // $name = strtolower($name); // convert upercase to lowercase 

            // $user_login_phone = array ();
            // $user_login_mail = new User();
            // $user_login_mail = array ();
            
            // $user_login_phone = new \stdClass();
            // $user_login_mail = new \stdClass();

            //---------------   User Login  -----------------
            // check email format code
            if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$name))
            {
                Auth::attempt(['phone' => $name, 'password' => $pass, $remember_me ]);
            }else{
                Auth::attempt(['email_address' => $name, 'password' => $pass, $remember_me ]);
            }

            if (Auth::check())
            {
                $user_id = Auth::user()->id;
                $user_email = Auth::user()->email_address;
                $user_phone = Auth::user()->phone;
                $user_type = Auth::user()->type;
                if (Auth::user()->type == "student")
                {
                    // Go to Student Welcome Page.
                    // put data into session
                    
                    $this->StoreStudentSession($request, $user_id, $user_email, $user_phone, $user_type ); 
                    return response()->json([
                        'success'=> 'Go to Student Welcome Page.'
                        ]);
                }
                else if (Auth::user()->type == "tutor")
                {
                    // Go to Tutor Welcome Page.
                    $this->StoreTutorSession($request, $user_id, $user_email, $user_phone, $user_type ); 
                    return response()->json([
                        'success'=> 'Go to Tutor Welcome Page.'
                    ]);
                }
                else
                {
                    // dd ("Error: invalid credentials.");
                    return response()->json([
                        'error' => 'Unknown Email or Password. Try Again!'
                    ]);
                }
            }
            else
            {
                // dd ("Error: invalid credentials.");
                return response()->json([
                    'error' => 'Unknown Email or Password. Try Again!'
                ]);
            }

            // if (Auth::attempt(['email_address' => $name, 'password' => $encrypt_pass, 'active' => 1 ]))
            // {
                // dd ("The user is being remembered...");
                // $token =  base64_encode($name);
                // $user->remember_token = $token;
                // $user->save();
            
                // if ( count($user_login_mail) > 0 || count($user_login_phone) > 0 )
                // {
                    // put data into session
                    // $user_id = $user_login_mail[0]->id;
                    // $user_email = $user_login_mail[0]->email_address;
                    // $user_phone = $user_login_mail[0]->phone;
                    // $user_type = $user_login_mail[0]->type;
                    // $this->StoreSession($request, $user_id, $user_email, $user_phone, $user_type ); 

                    // $user = User::findOrFail($user_id);
                    //-----  Remember Me Option  -----------
                    
                    // ----------  End Remember Me ----------

            //         if ($user_type == "student")
            //         {
            //             // Go to Student Welcome Page.
            //             // put data into session
            //             // $this->StoreStudentSession($request, $user_id, $user_email, $user_phone, $user_type ); 
            //             return response()->json([
            //                 'success'=> 'Go to Student Welcome Page.'
            //                 ]);
            //         }
            //         else if ($user_type == "tutor")
            //         {
            //             // Go to Tutor Welcome Page.
            //             // $this->StoreTutorSession($request, $user_id, $user_email, $user_phone, $user_type ); 
            //             return response()->json([
            //                 'success'=> 'Go to Tutor Welcome Page.'
            //             ]);
            //         }
                
            //         else
            //         {
            //             return response()->json([
            //                 'error'=> 'Error! Something Went Wrong.'
            //             ]);
            //         }
            //     }
            //     else
            //     {
            //         // dd ("Error: invalid credentials.");
            //         return response()->json([
            //             'error' => 'Unknown Email or Password. Try Again!'
            //         ]);
            //     }
            // }
            // else
            // {
            //     dd ("No");
            // }
        
    }

    /**
     * User Dashboard 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dashboard (Request $request)
    {
        $student_id = $request->session()->get('session_student_id');
        $tutor_id = $request->session()->get('session_tutor_id');
        if (!empty($student_id))
        {
            $user = User::findOrFail($student_id);
            // dd ($user->type);
            if ($user->type == "student")
            {
                return redirect()->route('student.dashboard');
            }
            else
            {
                // Error
                return ("Error! Student Session is not set.");
            }
        }
        else if (!empty($tutor_id))
        {
            // $user = User::where('id',$tutor_id)->get();
            $user = User::findOrFail($tutor_id);
          
            if ($user->type == "tutor")
            {
                try {
                    if (!empty($user->payments->user_id))
                    {
                        return redirect()->route('tutor.dashboard');
                    }
                    else
                    {
                        return view('theme.register.tutor.payment')->with(['id'=>$tutor_id]);
                    }
                }
                //catch exception
                catch(Exception $e) {
                    return view('theme.register.tutor.payment')->with(['id'=>$tutor_id]);
                } 
            }
            else
            {
                // Error
                return ("Error! Tutor Session is not set.");
            }
        }
       else
       {
           dd ("Error! Something went wrong.");
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
        // unique:users,email_address
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => [new EmailFormat, 'unique:users,email_address'],
            // 'email' => 'unique:users,email_address',
            'phone' => 'required|unique:users,phone',
            'birthday' => 'required|date',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'password' => new Password,
            'type' => 'nullable',
        ],
        [   
            'fname.required' => 'first name field is required.',
            'lname.required' => 'last name field is required.',
            'email.required' => 'The email must be a valid email address.',
            'phone.required' => 'phone field is required.',
            'birthday.required' => 'birthday field is required.',
            'country.required' => 'country field is required.',
            'state.required' => 'state field is required.',
            'city.required' => 'city field is required.',
            'zipcode.required' => 'zipcode field is required.',
            'password.required' => 'password field is required.',
            // 'type.required' => 'Type field is required.',
        
            // 'birthday.date'    => 'Enter a valid birthday date.',
            'password.min' => 'Password length should be more than 8 character or digit.',
            'password.alpha_num' => 'Password should atlear 1 digit.',
            'password.character' => 'Password should atlear 1 character.',
            'phone.unique' => 'Your phone number already exist.',
            'email.unique' => 'Your email address already exist.',

        ]);
        
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $email_addr = $request->input('email');
        $password = $request->input('password');

        $phone = $request->input('phone');
        $birthday = $request->input('birthday');
        $country = $request->input('country');
        $state = $request->input('state');
        $city = $request->input('city');
        $zipcode = $request->input('zipcode');
        $type = $request->input('type');

        $veri_key = md5(time().$password); // email key 
        // $encrypt_pass = base64_encode($password); # encrypting password
        $encrypt_pass = Hash::make($password);
        // $encrypt_pass = Crypt::encryptString($password);
        // $encrypt_pass = $password;

        
        //--------   Student Panel   -----------
        $user_phone = User::where('phone',$phone)->get();
        $user_mail = User::where('email_address',$email_addr)->get();
        if ( count($user_phone) > 0 )
        {
            dd("Phone number already exist.");
        } 
        else if ( count($user_mail) > 0 )
        {
            dd("Email address already exist.");
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
            Mail::to($user->email_address)->send(new SendMailable($user));

            // Mail::send(new SendMailable($user), function ($m) use ($user) {
            //     $m->from('hello@app.com', 'Your Application');
    
            //     $m->to($user->email, $user->name)->subject('Your Reminder!');
            // });

            // Mail::to('thebooster786@gmail.com')
            // ->cc('junaid@gmail.com')
            // ->subject("Welcom mail")       
            // ->send(new SendMailable($user));

            // User Profile 

            // Store user info into session
            // $this->StoreSession($request, $user->id, $user->email_address, $user->phone, $user->type);

            if ($type == 'student')
            {
                // student panel
                // Store user info into session
                $this->StoreStudentSession($request, $user->id, $user->email_address, $user->phone, $user->type);
                return view ('theme.register.upload_image')->with(['id'=> $user->id]);
            }
            else
            {
                // tutor panel
                // Store user info into session
                $this->StoreTutorSession($request, $user->id, $user->email_address, $user->phone, $user->type);
                return view ('theme.register.tutor.payment')->with(['id' => $user->id]);
            }
            
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $Student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $Student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $Student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $Student)
    {
        //
    }

    /**
     * List of all Students
     *
     * @param  \App\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function ListStudent(string $email, string $key)
    {
        //
        $Students = User::where('email_address',$email)->where('verification_key',$key)->first();
       
        if (!empty($Students) > 0)
        {
            $Students->verified_email = '1';
            $Students->save();
            return redirect('signin');  
        }
        else
        {
            return ('Error 404');
        }
        
    }

    /**
     * Confirm username/emailaddress for forget password
     *
     * @param  \App\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function ForgetPassword(Request $request)
    {   
        $input_data = $request->user;
        $User = new User();
      
        // user login with his email address
        $User = User::where('email_address',$input_data)->first();
        
        if (!empty($User) )
        {
            Mail::to($User->email_address)->send(new ResetPasswordMail($User) );
        
            return response()->json([
                'success' => 'A email for verification has been sent to your email address.'
            ]);
        }
        else
        {
            return response()->json([
                'error' => 'incorrect credational.'
            ]);
        }
        
    }

    /**
     * reset password 
     *
     * @param  \App\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function ResetPassword(string $email, string $key)
    {
        return view ('theme.register.forget_password.reset_password')->with(['email'=>$email,'key'=>$key]);
    }

    public function UpdatePassword(Request $request)
    {
        $email = $request->input('email');
        $key = $request->input('key');
        $password = $request->input('password');
        $confirm_password = $request->input('confirm_password');

        $user = User::where('email_address',$email)->where('verification_key',$key)->first();
        
        // dd ($Students);

        if (!empty($user) > 0)
        {
            $encrypt_pass = base64_encode($password); # encrypting password
            // dd ($encrypt_pass);
            $user->password = $encrypt_pass;
            $user->save();
            // return redirect()->route('signin');
            return response()->json([
                'success' => 'Your password has been reset.'
            ]);
        }
        else
        {
            return response()->json([
                'success' => 'Unknown Credential.'
            ]);
        }
    }

    /**
     * Redirect the user to the google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($service)
    {
        return Socialite::driver($service)->redirect();
    }

    /**
     * Obtain the user information from google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(Request $request, $service)
    {
        $user = Socialite::driver($service)->stateless()->user();
       
        // $Student = new Student();
        // Check if email already exist in db then go to welcom page
        $find_email = Student::where('email_address',$user->getEmail())->first(); // Its not an array
        

        if ( !empty($find_email) )
        {
            if ($find_email->block == "1")
            {
                echo "Error: Current user has been blocked.";
            }
            else
            {
                if ( !empty($find_email->facebook_id) )
                {
                    $request->session()->put('user_id',$find_email->facebook_id); // storing id into session
                }
                else
                {
                    $request->session()->put('user_id',$find_email->gmail_id); // storing id into session
                }
                // $request->session()->put('user_id',$find_email->email_address); // storing id into session
                // echo "Welcome Page.";
                return redirect ('/');
            }
        }        
        else
        {
            // create new user
            $facebook_id = '';
            $gmail_id = '';
            if ($service == 'facebook')
            {
                // For facebook user
                $facebook_id = $user->getId();
            }
            else
            {
                // For Google User
                $gmail_id = $user->getId();
            }
            // store google user in db
            // $Student->first_name = $user->getName();
            // $Student->email_address = $user->getEmail();
            // $Student->token = $user->token;
            // $Student->token_expiry_date = $user->expiresIn;
            // $Student->verified_email = "1"; // verified email status
            // $Student->block = "0";
            // $Student->active = "1";
            // $Student->save();

            // return view ('registration/add_username',[
            //             'user_email_addr'=>$user->getEmail(),
            // ]);
            
            // echo session()->put('user_id', $user->getId() ); // storing id into session
            return view ('registration/add_username',[
                        'facebook_id'=>$facebook_id,
                        'gmail_id'=>$gmail_id,
                        'user_name'=>$user->getName(),
                        'user_email_addr'=>$user->getEmail(),
                        'user_token'=>$user->token,
                        'user_expire'=>$user->expiresIn
            ]);
        }
    }

    public function AddUsername (Request $request)
    {
        $Student = new Student();
        $username = $request->input('username');

        $user_facebook_id = $request->input('facebook');
        $user_google_id = $request->input('google');
        $user_fname = $request->input('fname');
        $user_email = $request->input('email');
        $user_token = $request->input('token');
        $user_expire = $request->input('expire');

        // if ( !empty($username) and !empty($user_fname) and !empty($user_email) and !empty($user_token) and !empty($user_expire) )
        if ( !empty($username) )        
        {
            // $email_found = Student::where("email_address",$user_email)->first();
            if ( !empty($user_facebook_id) )
            {
                // Facebook user
                $Student->facebook_id = $user_facebook_id;
                $Student->username = $username;
                $Student->first_name = $user_fname;
                $Student->email_address = $user_email;
                $Student->token = $user_token;
                $Student->token_expiry_date = $user_expire;
                $Student->save();
                // Go to welcome page
                // $request->session()->put('user_id', $user->getId()); // storing id into session
                return response()->json([
                    'success' => 'Go to welcome page.'
                ]);
            }
            else
            {
                $Student->gmail_id = $user_google_id;
                $Student->username = $username;
                $Student->first_name = $user_fname;
                $Student->email_address = $user_email;
                $Student->token = $user_token;
                $Student->token_expiry_date = $user_expire;
                $Student->save();
                // Go to welcome page
                $request->session()->put('user_id', $user_google_id); // storing id into session
                return response()->json([
                    'success' => 'Go to welcome page.'
                ]);
            }
        }
        else
        {
            return response()->json([
                'error' => 'Invalid creditional.'
            ]);
        }   
    }

    /**
     * Clear all session and redirect to login
     *
     * @return \Illuminate\Http\Response
     */
    public function Logout(Request $request)
    {
        $request->session()->flush();
        return redirect ('/signin');
    }

     /**
     * Upload user profile Image
     *
     * @return \Illuminate\Http\Response
     */
    public function UploadPicture(Request $request )
    {  
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],
        [   
            'image.image'    => 'file should be image type.',
        ]);

        $student_id = $request->session()->get('session_student_id');
        $tutor_id = $request->session()->get('session_tutor_id');
        if (!empty($student_id) )
        {
            $id = $student_id;
        }
        else if (!empty($tutor_id))
        {
            $id = $tutor_id;
        }
        else
        {
            return ("Error! User Session not found");
        }

        $image = new Image();
        
        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $new_name = rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path("images"), $new_name );

            $image->user_id = $id;
            $image->name = $new_name;
            $image->path = "images";
            
            $image->save();
        }
        else
        {
            $image->user_id = $id;
            $image->name = "default-profile-image.jpg";
            $image->path = "images";
            
            $image->save();
        }
        
        
        
        $user = User::findOrFail($id);
        if ($user->type == "student")
        {
            // Student Dashboard
            return view ('theme.student.student_dashboard')->with(['user' => $user]);
        }
        else
        {
            // Tutor Dashboard
            return view ('theme.tutor.tutor_dashboard')->with(['user' => $user]);
        }
    }

    /**
     * Store pyament form data
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Payment(Request $request)
    {
        //
        $id = $request->input('id');
        $card_number = $request->input('card_number');
        $month = $request->input('month');
        $year = $request->input('year');
        $cvv = $request->input('cvv_number');

        $payment = new Payment();

        $payment->user_id = $id;

        $payment->card_number = $card_number;
        $payment->expiry_month = $month;
        $payment->expiry_year = $year;
        $payment->cvv_number = $cvv;

        $payment->save();

        return view ('theme.register.tutor.qualification')->with(['id' => $id ]);
    }

    /**
     * Upload tutor qualification
     *
     * @return \Illuminate\Http\Response
     */
    public function UploadQualification(Request $request )
    {  
        $request->validate([
            'id' => 'nullable',
            // 'subject' => 'nullable',
            'summary' => 'nullable',
            'method' => 'nullable',
            'price_per_hour' => 'nullable',
        ],
        [   
            // 'price_pr_hour.number'    => 'only number (0-9)',
        ]);

        $id = $request->input('id');
        // $subject = $request->input('subject');
        $summary = $request->input('summary');
        $method = $request->input('method');
        $price_per_hour = $request->input('price_per_hour');
        
        // $tutor->tutor_id = $id;

        $tutor = User::findOrFail($id);
        if ($tutor->type == 'tutor')
        {
            // Tutor Panel
            $tutor = User::findOrFail($id)->update(['summary' => $summary, 'teaching_method' => $method, 'price_per_hour' => $price_per_hour ]);
        }
        else
        {
            dd ("Some thing went wrong.");
        }
        
        return view ('theme.register.upload_image')->with(['id' => $id ]);
        // return view ('tutor.profile_picture',['id' => $id ]);
    }

    /**
     * Store Student Session
     *
     * @return \Illuminate\Http\Response
     */
    public function StoreStudentSession(Request $request, $user_id, $user_email, $user_phone, $user_type)
    {
        $request->session()->put('session_student_id',$user_id); // storing id into session
        $request->session()->put('session_student_email',$user_email); // storing user email into session
        $request->session()->put('session_student_phone',$user_phone); // storing user phone into session
        $request->session()->put('session_student_type',$user_type); // storing user type into session
    }

    /**
     * Store Tutor Session
     *
     * @return \Illuminate\Http\Response
     */
    public function StoreTutorSession(Request $request, $user_id, $user_email, $user_phone, $user_type)
    {
        $request->session()->put('session_tutor_id',$user_id); // storing id into session
        $request->session()->put('session_tutor_email',$user_email); // storing user email into session
        $request->session()->put('session_tutor_phone',$user_phone); // storing user phone into session
        $request->session()->put('session_tutor_type',$user_type); // storing user type into session
    }

    // /**
    //  * Show Session
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function ShowSession(Request $request)
    // {
    //     $request->session()->get('session_user_id'); // Show id into session
    //     $request->session()->get('session_user_email'); // Show user email into session
    //     $request->session()->get('session_user_phone'); // Show user phone into session
    //     $request->session()->get('session_user_type'); // Show user type into session
    // }


    /**
     * Reset User Password
     *
     * @return \Illuminate\Http\Response
    */
    public function UserResetPassword(Request $request)
    {
        // $user_id = $request->inpute('id');
        $user_id = "1";
        return view ('student.reset_password.reset_password')->with(['user_id'=>$user_id]);
    }

    /**
     * Update User Password
     *
     * @return \Illuminate\Http\Response
    */
    public function UserResetPasswordData(Request $request)
    {
        // $user_fname = $request->input('fname');
        $request->validate([
            'user_id' => 'required',
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
        ]);
        $user_id = $request->input('id');
        $old_password = $request->input('old_password');
        $new_password = $request->input('new_password');
        $confirm_password = $request->input('confirm_password');

        return ('Password has been updated.');
    }
    

    /**
     * Account Remember Me 
     *
     * @return \Illuminate\Http\Response
    */
    public function RememberMe(Request $request)
    {
        
        User::where()->get();

        return ('Password has been updated.');
    }
}
