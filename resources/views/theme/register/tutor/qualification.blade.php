<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TutorLynx | Payment</title>
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

    {{-- Multi Select Dropdown --}}
    <link href="{{ asset('theme_asset/multi/jquery.multiselect.css') }}" rel="stylesheet" type="text/css">
      
</head>

<style>
/* Inline Styling Code */
    body { font-family:'Open Sans' Arial, Helvetica, sans-serif}
    ul,li { margin:0; padding:0; list-style:none;}
    .label { color:#000; font-size:16px;}
</style>

<script>
document.getElementById('output').innerHTML = location.search;
$(".chosen-select").chosen();
</script>


<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><img src="{{ asset('theme_asset/dist/img/TLLogo.png') }}" style="width: 60px">
                <img src="{{ asset('theme_asset/dist/img/TL_txt_img.png') }}"></a>
        </div>

        <div class="card card-primary card-outline">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Payment for TutorLynx</p>
                <form action="{{ Route('tutor.profile.setup') }}" method="POST" accept-charset="UTF-8" >
                    @csrf

                    <div class="input-group mb-2">
                        <input type="hidden" name="id" class="form-control" autocomplete="disabled" value="{{ $id }}" >
                        {{-- <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div> --}}
                    </div>

                    {{-- <div class="input-group mb-2" >
                        <input type="text" name="subject" class="form-control" autocomplete="disabled" placeholder="Subject" value={{ old('subject') }} >
                        <div class="input-group-append" >
                            <div class="input-group-text" >
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('subject')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror --}}

                    {{-- Multiple Select Options --}}
                    <div class="row">
                        <div class="input-group mb-2">
                            <div class="form-group col-12 mb-0 ml-0">
                                <select name="langOptgroup[]" multiple id="langOptgroup" class="form-control">
                                    <optgroup label="Programming Languages">
                                        <option value="C++ / C#">C++ / C#</option>
                                        <option value="Java">Java</option>
                                        <option value="Objective-C">Objective-C</option>
                                    </optgroup>
                                    <optgroup label="Client-side scripting Languages">
                                        <option value="JavaScript">JavaScript</option>
                                    </optgroup>
                                    <optgroup label="Server-side scripting Languages">
                                        <option value="Perl">Perl</option>
                                        <option value="PHP">PHP</option>
                                        <option value="Ruby on Rails">Ruby on Rails</option>
                                    </optgroup>
                                    <optgroup label="Mobile Platforms">
                                        <option value="Android">Android</option>
                                        <option value="iOS">iOS</option>
                                    </optgroup>
                                    <optgroup label="Document Markup Languages">
                                        <option value="HTML">HTML</option>
                                        <option value="XML">XML</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    


                    <div class="input-group mb-2">
                        <input type="text" name="price_per_hour" class="form-control" autocomplete="disabled" placeholder="Price Per Hour" >
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="input-group mb-2" >
                        <textarea placeholder="Profile Summary" name="summmary" id="summary" name="summary" cols="40" rows="10"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label>Select your teaching method.</label>
                        </div>
                        <div class="col-4">
                            <div class="icheck-primary">
                                <input type="radio" name="method" id="onlinelabel" value="online" value={{ old('type') }} >
                                <label for="onlinelabel">
                                    Online
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="icheck-primary">
                                <input type="radio" name="method" id="inpersonlabel" value="in-person" value={{ old('type') }} >
                                <label for="inpersonlabel">
                                    In Person
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="icheck-primary">
                                <input type="radio" name="method" id="bothlable" value="both" value={{ old('type') }} >
                                <label for="bothlable">
                                    Both
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

                <a href="login.html" class="text-center">I already have an account. Sign In</a>

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

    {{-- Multi Select --}}
    <script src="{{ asset('theme_asset/multi/jquery.min.js') }}"></script>
  <script src="{{ asset('theme_asset/multi/jquery.multiselect.js') }}"></script>
  <script>
    $('#langOpt').multiselect({
        columns: 1,
        placeholder: 'Select Languages'
    });
    
    $('#langOpt2').multiselect({
        columns: 1,
        placeholder: 'Select Languages',
        search: true
    });
    
    $('#langOpt3').multiselect({
        columns: 1,
        placeholder: 'Select Languages',
        search: true,
        selectAll: true
    });
    
    $('#langOptgroup').multiselect({
        columns: 1,
        placeholder: 'Select Subjects',
        search: true,
        selectAll: true
    });
    </script>

</body>

</html>



<script type="text/javascript">

// Only Number
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

</script>