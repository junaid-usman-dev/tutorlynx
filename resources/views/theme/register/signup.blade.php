<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TutorLynx | Sign up</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('theme_asset/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('theme_asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('theme_asset/dist/css/adminlte.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<style>
.valid {
		color: green;
}
.invalid {
    color: red;
}
.signup{
    display: show;
}
.signin{
    display: none;
}
.error
{
    color: red;
    display: none;
}
</style>



<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><img src="{{ asset('theme_asset/dist/img/TLLogo.png') }}" style="width: 60px">
                <img src="{{ asset('theme_asset/dist/img/TL_txt_img.png') }}"></a>
        </div>

        <div class="card card-primary card-outline">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Sign up for TutorLynx</p>
                <form action="{{ route('submit.user.info') }}" method="POST" accept-charset="UTF-8" >
                      @csrf

                    <div class="row">
                        <div class="col-6 mb-0 ml-0">
                            <div class="input-group mb-2">
                                <input type="text" name="fname" class="form-control" autocomplete="disabled" placeholder="First name" value={{ old('fname') }} >
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-0 ml-0">
                            <div class="input-group mb-2">
                                <input type="text" name="lname" class="form-control" autocomplete="disabled" placeholder="Last name" value={{ old('lname') }} >
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @error('fname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="input-group mb-2">
                        <input type="email" name="email" class="form-control" autocomplete="disabled" placeholder="Email" value={{ old('email') }} >
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="input-group mb-2">
                        <input type="password" name="password" id="password" class="form-control password-popover" placeholder="Password"
                            title='<strong>Password must contain the following:</strong>' data-html="true" 
                            data-toggle="popover" data-trigger="focus" 
                            data-content='
                                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                <p id="number" class="invalid">A <b>number</b></p>
                                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                            '>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    {{-- <div>
                        <p id="error_password" class="text-danger"></p>
                        <p id="error_letter" class="text-danger"></p>
                        <p id="error_capital" class="text-danger"></p>
                        <p id="error_number" class="text-danger"></p>
                        <p id="error_length" class="text-danger"></p>
                    </div>
        
                    <div id="message" class="" style="display:none;">
                        <strong>Password must contain the following:</strong>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                    </div> --}}

                    <div class="input-group mb-2">
                        <input type="text" name="phone" class="form-control only-numeric" autocomplete="disabled" placeholder="Phone Number" value={{ old('phone') }} >
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-mobile-alt"></span>
                            </div>
                        </div>
                    </div>
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="input-group mb-2">
                        <input type="date" name="birthday" class="form-control only-numeric" autocomplete="disabled" placeholder="Enter Birthday" value={{ old('birthday') }} >
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-birthday-cake"></span>
                            </div>
                        </div>
                    </div>
                    @error('birthday')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="row">
                        <div class="input-group mb-2">
                            <div class="form-group col-12 mb-0 ml-0">
                                <select class="form-control" name="country" data-placeholder="Select Country" style="width: 100%;" value={{ old('country') }} >
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    @error('country')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="row">
                        <div class="input-group mb-2">
                            <div class="form-group col-6 mb-0 ml-0">
                                <select class="form-control" name="state" data-placeholder="Select State" style="width: 100%;" value={{ old('state') }} >
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                            @error('state')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group col-6 mb-0 ml-0">
                                <select class="form-control" name="city" data-placeholder="Select City" style="width: 100%;" value={{ old('city') }} >
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                            @error('city')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="input-group mb-2">
                        <input type="text" name="zipcode" class="form-control" placeholder="Zipcode" value={{ old('zipcode') }} >
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-map-marker-alt"></span>
                            </div>
                        </div>
                    </div>
                    @error('zipcode')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="row">
                        <div class="col-5">
                            <div class="icheck-primary">
                                <input type="radio" name="type" id="studentlabel" value="student" checked="" >
                                <label for="studentlabel">
                                    I'm a student
                                </label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="icheck-primary">
                                <input type="radio" name="type" id="tutorlabel" value="tutor" value={{ old('type') }} >
                                <label for="tutorlabel">
                                    I'm a tutor
                                </label>
                            </div>
                        </div>
                    </div>
                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <div class="social-auth-links text-center">
                        <button class="btn btn-block btn-primary" name="signup" id="signup" >
                            <em class="fas fa-check-circle mr-2"></em>
                                Sign up
                        </button>
                    </div>

                </form>

                <a href="{{ url('signin') }}" class="text-center">I already have an account. Sign In</a>

            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="{{ asset('theme_asset/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('theme_asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('theme_asset/dist/js/adminlte.min.js') }}"></script>
</body>

</html>



<script type="text/javascript">
 
 $(document).ready(function(){
    // $('[data-toggle="popover"]').popover();
    
    $('.password-popover').popover({
        trigger: 'focus'
    })

}); 


$(document).ready(function() {
    $(".only-numeric").bind("keypress", function (e) {
        var keyCode = e.which ? e.which : e.keyCode
            
        if (!(keyCode >= 48 && keyCode <= 57)) {
            // Show Error
            $(".error").css("display", "inline");
            return false;
        }else{
            // Right
            $(".error").css("display", "none");
        }
    });
});





jQuery(document).ready(function(){

// Start password format validation
//----------------------------------------------------------
var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

var myInput = document.getElementById("password")

// Password Bool
var uper = false;
var lower = false;
var num = false;
var len = false;
// Other Bool

// var email_flag = false;
var pass_flag = false;
// var username_flag = false;

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    // document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    // document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if(myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
        lower = true;
    } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
        lower = false;
    }

    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
        uper = true;
    } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
        uper = false
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if(myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
        num = true;
    } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
        num = false;
    }

    // Validate length
    if(myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
        len = true;
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
        len = false;
    }
    }

    //----------------------------------------------------------
    // End password foramt validation
    //----------------------------------------------------------
    });


</script>