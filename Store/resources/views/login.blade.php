@extends('master')
@section('content')

<div class="limiter">
    <div class="container-login100" style="background-image: url('img/bg-01.jpg');">
      <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
        <form class="login100-form validate-form flex-sb flex-w" method="post" action="login">
          {{ csrf_field() }}
          <span class="login100-form-title p-b-53">
            Sign In With
          </span>

          <a href="#" class="btn-face m-b-20">
            <i class="fa fa-facebook-official"></i>
            Facebook
          </a>

          <a href="#" class="btn-google m-b-20">
            <img src="img/icons/icon-google.png" alt="GOOGLE">
            Google
          </a>
          
          <div class="p-t-31 p-b-9">
            <span class="txt1">
              Email
            </span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Email is required">
            <input class="input100" type="email" id="email" name="email" value=" {{ old('email')}} " >
            <span class="focus-input100"></span>
          </div>
          
          <div class="p-t-13 p-b-9">
            <span class="txt1">
              Password
            </span>

            <a href="#" class="txt2 bo1 m-l-5">
              Forgot?
            </a>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" id= "password" name="password" >
            <span class="focus-input100"></span>
          </div>

          <div class="container-login100-form-btn m-t-17">
           

          <input class = "login100-form-btn" type="submit" name="login" value="login">
          </div>

          <div class="w-full text-center p-t-55">
            <span class="txt2">
              Not a member?
            </span>

            <a href="Register" class="txt2 bo1">
              Sign up now <br>
            </a>
            <div style="color: red; margin-top: 20px; font-size: 25px;">
                @foreach($errors->all() as $error)
               {{ $error }} <br>
                @endforeach
            </div>
          </div>
        </form>
      
      </div>
    </div>
  </div>
  


@stop