<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('popover');
});

/*
|--------------------------------------------------------------------------
| Registration
|--------------------------------------------------------------------------
|
| Here is where you can register user loaded by StudentController
| 1 Sign up 
| 2 Sign in
| 3 reset password 
| 4 Gmail integration
| 5 Facebook integration
| 6 Send Email Verification
|
*/

// signup
Route::get('/signup', 'Registration\RegistrationController@create')->name('signup');
Route::post('/store', 'Registration\RegistrationController@store')->name('submit.user.info');
Route::get('/verify/{email}/{key}', 'Registration\RegistrationController@ListStudent');

//Signin
Route::get('/signin', 'Registration\RegistrationController@index')->name('signin'); 
Route::post('/home', 'Registration\RegistrationController@home');

Route::get('/dashboard', 'Registration\RegistrationController@dashboard')->name('dashboard'); 

// Logout user
Route::get('/logout','Registration\RegistrationController@Logout')->name('logout'); 

// forget password
Route::get('/confirm-email-address', function () {
    return view('theme.register.forget_password.send_email');
});
Route::post('/forgetpassword/verification', 'Registration\RegistrationController@ForgetPassword'); // check username/email address
Route::get('/reset-password/{email}/{key}', 'Registration\RegistrationController@ResetPassword'); // view update page
Route::post('/password/updated', 'Registration\RegistrationController@UpdatePassword')->name('user.password.update'); // updpate password
// end forget password url

// Reset Password
Route::get('/reset-password', 'Registration\RegistrationController@UserResetPassword'); // reset user password
Route::post('/reset-password', 'Registration\RegistrationController@UserResetPasswordData')->name('user.reset.password'); // reset user password
// end Reset Password


// Socialite Authentication url
Route::get('login/{service}', 'Registration\RegistrationController@redirectToProvider');
Route::get('login/{service}/callback', 'Registration\RegistrationController@handleProviderCallback');

// add usernname for Facebook and Google user
Route::post('/username', 'Registration\RegistrationController@AddUsername');

// ----------------------------------------------------------------------------------------------------
// Route::get('/profile/picture', function () {
//     return view('theme.register.upload_image');
// });
Route::post('/profile/image', 'Registration\RegistrationController@UploadPicture')->name('upload.profile'); // Upload profile picture
Route::post('/submit/payment', 'Registration\RegistrationController@Payment')->name('tutor.fee.submission'); // Submit Registration Fee
Route::post('/setup_profile', 'Registration\RegistrationController@UploadQualification')->name('tutor.profile.setup'); // Add Qualification



// Google Location
// Route::get('/google-map', function () {
//     return view('location');
// });

// Appointment
Route::get('/appointment', function () {
    return view('appointment');
});



/*
|--------------------------------------------------------------------------
| Student
|--------------------------------------------------------------------------
|
| 1 Dashboard 
| 2 Search Tutors
| 3 List Favorite Tutors
| 4 Message to the specific tutor
| 5 Facebook integration
| 6 Send Email Verification
|
*/

Route::prefix('student')->group(function () {

    Route::get('/', 'Users\Student\StudentController@dashboard')->name('student.dashboard');

    Route::get('/home/{id}', 'Users\Student\StudentController@show')->name('student.home'); // Home Page

    Route::get('/edit/{id}', 'Users\Student\StudentController@edit')->name('student.edit.profile'); // Edit student profile
    Route::post('/update', 'Users\Student\StudentController@update')->name('student.update.profile'); // Update student profile

    Route::get('/add/favorit/tutor/{user_id}/{favorite_user_id}', 'Users\Student\StudentController@AddFavorite')->name('add.favorite.tutors'); // Add tutor to Favorite category
    Route::get('/favorite/tutors/{id}', 'Users\Student\StudentController@ListFavorite')->name('favorite.tutors.list'); // List of all Favorite Tutors

    /**
     * Message
     */
    Route::prefix('message')->group(function () {
        Route::get('/view-all/{sender_id}/{receiver_id}', 'Message\MessageController@Conversation')->name('message.conversation'); // Display conversion between two person
        Route::get('/contact-list/{id}', 'Message\MessageController@Contacts')->name('message.contact.list'); // Contact list for specfic person
        
        Route::get('/send', 'Message\MessageController@store')->name('message.send'); // Chat Send Message

    });

});

/*
|--------------------------------------------------------------------------
| Tutor
|--------------------------------------------------------------------------
|
| 1 Dashboard 
| 2 List Of Students
| 3 Set Profile
| 4 Participate in Tests
| 5 Choose Subjects
| 6 View Results
|
*/

Route::prefix('tutor')->group(function () {

    // Route::get('option', function () {
    //     return view('tutor.tutor_option');
    // });
    Route::get('/', 'Users\Tutor\TutorController@dashboard')->name('tutor.dashboard');

    // Route::post('/setup_profile', 'Users\Tutor\TutorController@UploadQualification')->name('tutor.profile.setup'); // Add Qualification
    // Route::post('/uploaded', 'Users\Tutor\TutorController@UploadPicture')->name('tutor.upload.tutor.image'); // Upload profile picture
    Route::get('/home/{id}', 'Users\Tutor\TutorController@show')->name('tutor.home'); // Home Page

    Route::get('/edit/{id}', 'Users\Tutor\TutorController@edit')->name('tutor.edit.profile'); // Edit tutor profile
    Route::post('/update', 'Users\Tutor\TutorController@update')->name('tutor.update.profile'); // Update tutor profile

    Route::get('/list', 'Users\Tutor\TutorController@index')->name('tutor.list'); // Display All Tutors

    Route::get('/profile/{id}', 'Users\Tutor\TutorController@TutorProfile')->name('tutor.profile'); // View specific tutor profile as a student

    Route::get('/general-availability/{id}', 'Users\Tutor\TutorController@GeneralAvailability')->name('tutor.general.availability'); // Tutor General Availability

    Route::get('/submit-review', 'Users\Tutor\TutorController@AddReview')->name('tutor.review'); // Tutor General Availability

    Route::get('/filter-by-subject', 'Users\Tutor\TutorController@FilterBySubject')->name('filter.tutor.by.subject'); // Tutor General Availability
    Route::get('/sort-by-rating', 'Users\Tutor\TutorController@SortByRating')->name('sort.tutor.by.rating'); // Sort Tutor By Rating

    Route::get('/test-list', 'Users\Tutor\TutorController@TestList')->name('tutor.test.list'); // Test List
    Route::get('/test-attempt/{id}', 'Users\Tutor\TutorController@AttemptTest'); // Attempt Test
    Route::post('/next-question/{test_id}/{total_questions}/{question_id}', 'Users\Tutor\TutorController@NextQuestion'); // Next Question
    Route::get('/test-submit', 'Users\Tutor\TutorController@SubmitTest'); // Submit Test
    Route::get('/test-results', 'Test\TestController@TutorResult'); // Test Result
    
});


/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
|
| 1 Create New Admin User
| 2 Manage Subjects
| 3 Manage Tests
| 4 Manage Tutors
| 5 Manage Students
| 6 
|
*/

// Route::get('/admin/signin', function () {
//     return view('theme.admin.signin.admin_signin');
// })->name('admin.signin');

// Route::post('/admin/home', 'Users\Admin\AdminController@AdminLogin'); 

// Route::get('/admin/index', 'Users\Admin\AdminController@index'); // Display Admin List

// Route::get('/admin/create', 'Users\Admin\AdminController@create'); // Create specific admin

// Route::get('/admin/update', 'Users\Admin\AdminController@update'); // update specific user

// Route::get('/admin/destroy/{id}', 'Users\Admin\AdminController@destroy'); // destroy specific user



Route::prefix('admin')->group(function () {

    /*
    * Admin URL's
    */
    Route::get('/signin', function () {
        return view('theme.admin.signin.admin_signin');
    })->name('admin.signin'); // Admin Sign in
    Route::post('/home', 'Users\Admin\AdminController@AdminLogin'); // Admin Sign in

    Route::get('/logout', 'Users\Admin\AdminController@logout')->name('admin.logout'); // logout specific admin user

    Route::get('/', 'Users\Admin\AdminController@dashboard')->name('admin.dashboard');

    // Admin Home Options
    Route::get('/home-page', function () {
        return view('admin.home.home');
    });

    Route::get('/create', 'Users\Admin\AdminController@create')->name('create.admin'); // Create specific admin
    Route::post('/store', 'Users\Admin\AdminController@store'); 
    Route::get('/edit/{id}', 'Users\Admin\AdminController@edit')->name('admin.edit'); // edit specific user
    Route::post('/update', 'Users\Admin\AdminController@update'); // update specific user

    Route::get('/list', 'Users\Admin\AdminController@index')->name('admin.list'); // Display Admin List
    Route::get('/destroy/{id}', 'Users\Admin\AdminController@destroy'); // destroy specific user
    

    /*
    * Subjects: Ony Admin can create, delete and edit the subject
    */
    Route::prefix('subject')->group(function () {

        Route::get('/list', 'Subject\SubjectController@index')->name('subject.list'); // display all subjects

        Route::get('/create', 'Subject\SubjectController@create'); // create a new subject
        Route::post('/store', 'Subject\SubjectController@store'); // store a new created subject to db

        Route::get('/delete/{id}', 'Subject\SubjectController@destroy'); // delete specific resource from db

        Route::get('/edit/{id}', 'Subject\SubjectController@edit'); // edit a specific subject
        Route::post('/update', 'Subject\SubjectController@update'); // update a specific subject

    });

    /*
    * Student: Ony Admin can create, delete and edit the Student
    */
    Route::prefix('student')->group(function () {

        Route::get('/list', 'Users\Student\StudentController@index')->name('student.list'); // display all student

        Route::get('/create', 'Users\Student\StudentController@create'); // create a new student
        Route::post('/store', 'Users\Student\StudentController@store'); // store a new created student to db
        Route::post('/upload-image', 'Users\Student\StudentController@UploadPicture')->name('student.upload.profile'); // Upload profile picture

        Route::get('/delete/{id}', 'Users\Student\StudentController@destroy'); // delete specific resource from db

        Route::get('/edit/{id}', 'Users\Student\StudentController@edit'); // edit a specific student
        Route::post('/update', 'Users\Student\StudentController@update'); // update a specific student

    });

    /*
    * Tutor: Ony Admin can create, delete and edit the Student
    */
    Route::prefix('tutor')->group(function () {

        Route::get('/list', 'Users\Tutor\TutorController@AdminIndex')->name('admin.tutor.list'); // display all tutor

        Route::get('/create', 'Users\Tutor\TutorController@create'); // create a new tutor
        Route::post('/store', 'Users\Tutor\TutorController@store')->name('admin.tutor.store'); // store a new created tutor to db
        Route::post('/upload-image', 'Users\Tutor\TutorController@UploadPicture')->name('admin.tutor.upload.profile'); // Upload profile picture

        Route::get('/delete/{id}', 'Users\Tutor\TutorController@destroy'); // delete specific resource from db

        Route::get('/edit/{id}', 'Users\Tutor\TutorController@edit'); // edit a specific tutor
        Route::post('/update', 'Users\Tutor\TutorController@update'); // update a specific tutor

    });

    /*
    * Test: Ony Admin can create, delete and edit the Student
    */
    Route::prefix('test')->group(function () {

        Route::get('/list', 'Test\TestController@index')->name('admin.test.list'); // display all test

        Route::get('/create', 'Test\TestController@create'); // create a new test
        Route::post('/store', 'Test\TestController@store')->name('admin.test.store'); // store a new created test to db
        
        Route::get('/delete/{id}', 'Test\TestController@destroy'); // delete specific resource from db

        Route::get('/edit/{id}', 'Test\TestController@edit'); // edit a specific test
        Route::post('/update', 'Test\TestController@update'); // update a specific test

        /*
        * Question: Ony Admin can create, delete and edit the Question
        */
        Route::prefix('question')->group(function () {

            // Route::get('/list', 'Test\TestController@index')->name('admin.test.list'); // display all question
            Route::get('/create', 'Test\QuestionController@create')->name('admin.test.question.create'); // create a new question for specific test
            Route::post('/store', 'Test\QuestionController@store')->name('admin.test.question.store'); // store a new created question to db
            
            // Route::get('/delete/{id}', 'Test\QuestionController@destroy'); // delete specific resource from db

            // Route::get('/edit/{id}', 'Test\QuestionController@edit'); // edit a specific test
            // Route::post('/update', 'Test\QuestionController@update'); // update a specific test

        });

    });



});

