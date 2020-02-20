<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V11</title>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset ('assets/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/main.css') }}">
<!--===============================================================================================-->



</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
                
                <form class="login100-form validate-form" method="POST" action="{{ action('Test\QuestionController@store') }}" >
                    @csrf
                    
                    <span class="login100-form-title p-b-25">
						Create Question
                    </span>

                        {{-- Start Question  --}}
                        <div class="wrap-input100 validate-input m-b-16" >
                            <input class="input100 @error('question') is-invalid @enderror" type="text" id="test_id" name="test_id" value="{{ $test_id }}">
                        </div>
                        @error('question')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                        <div class="wrap-input100 validate-input m-b-16" >
                            <input class="input100 @error('question_desc') is-invalid @enderror" type="text" id="question_desc" name="question_desc" placeholder="Question Description">
                        </div>
                        @error('question_desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                        <div class="wrap-input50 validate-input m-b-16" >
                            <input class="input100 @error('option_1') is-invalid @enderror" type="text" id="option_1" name="option_1" placeholder="Option 1">
                        </div>
                        @error('option_1')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                        <div class="wrap-input50 validate-input m-b-16" >
                            <input class="input100 @error('option_2') is-invalid @enderror" type="text" id="option_2" name="option_2" placeholder="Option 2">
                        </div>
                        @error('option_2')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                        <div class="wrap-input50 validate-input m-b-16" >
                            <input class="input100 @error('option_3') is-invalid @enderror" type="text" id="option_3" name="option_3" placeholder="Option 3">
                        </div>
                        @error('option_3')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                        <div class="wrap-input50 validate-input m-b-16" >
                            <input class="input100 @error('option_4') is-invalid @enderror" type="text" id="option_4" name="option_4" placeholder="Option 4">
                        </div>
                        @error('option_4')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                        <div class="wrap-input100 validate-input m-b-16" >
                            <input class="input100 @error('answer') is-invalid @enderror" type="text" id="answer" name="answer" placeholder="Answer">
                        </div>
                        @error('answer')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        {{-- End Question --}}

                    <div class="container-login100-form-btn p-t-15">
						<button class="login100-form-btn" id="createBtn" name="createBtn" >
							Create and Next
						</button>
                    </div>
                    
                </form>
                
                <a href="#" id="next_question" >Finish adding</a>

			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{ asset ('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset ('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->


</body>
</html>



