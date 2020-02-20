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
                
                <form class="login100-form validate-form" method="POST" action="{{ url('tutor/next-question') }}/{{ $test_id }}/{{ $total_questions }}/{{ $question_number }}" >
                    @csrf
                    
                    <span class="login100-form-title p-b-25">
						Attempt Test
                    </span>

                        {{-- Start Question  --}}
                        {{-- @foreach ($test->questions as $question) --}}
                        <p>Test ID: {{ $test_id }}</p>
                        <p>Total Questions: {{ $total_questions }}</p>
                        <p>Questions Number: {{ $question_number }}</p>
                        {{-- <p>Correct: {{ $correct_answer }}</p> --}}
                        <div class="wrap-input100 validate-input m-b-16" >
                            <input class="input100" type="text" id="test_id2" name="test_id2" value="2">
                        </div>
                        <div class="wrap-input100 validate-input m-b-16" >
                            <input class="input100" type="text" id="question_id2" name="question_id2" value="1">
                        </div>

                        <div class="wrap-input100 validate-input m-b-16" >
                            <p>Question#1: {{ $test->questions[$question_number]->question }}</p>
                        </div>
                       
                        <div class="wrap-input50 validate-input m-b-16" >
                            <input class="input50" type="radio" id="option" name="option" value="1">{{ $test->questions[$question_number]->option_1 }}
                        </div>
                       
                        <div class="wrap-input50 validate-input m-b-16" >
                            <input class="input50" type="radio" id="option" name="option" value="2" >{{ $test->questions[$question_number]->option_2 }}
                        </div>
                        
                        <div class="wrap-input50 validate-input m-b-16" >
                            <input class="input50" type="radio" id="option" name="option" value="3" >{{ $test->questions[$question_number]->option_3 }}
                        </div>
                        
                        <div class="wrap-input50 validate-input m-b-16" >
                            <input class="input50" type="radio" id="option" name="option" value="4" >{{ $test->questions[$question_number]->option_4 }}
                        </div>

                        {{-- @endforeach --}}

                    <div class="container-login100-form-btn p-t-15">
						<button class="login100-form-btn" id="createBtn" name="createBtn" >
							Next
						</button>
                    </div>

                </form>

                <br>
                <a href="{{ url ('tutor/test-submit') }}"  >Submit Test</a>

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



