
@extends('master')
@section('content')

<div class="limiter">
    <div class="container-login100" style="background-image: url('img/bg-01.jpg');">
      <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
        <form class="login100-form validate-form flex-sb flex-w" method="post" action="Register">
          {{ csrf_field() }}
          <span class="login100-form-title p-b-53">
            Register
          </span>

          <!-- Name --> 
          <div class="p-t-31 p-b-9">
            <span class="txt1">
              Name
            </span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Name is required">
            <input class="input100" type="text" id="Name" name="Name" value=" {{ old('Name')}} " >
            <span class="focus-input100"></span>
          </div>
          <!--        -->

           <!-- Email --> 
          <div class="p-t-13 p-b-9">
            <span class="txt1">
              Email
            </span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Email is required">
            <input class="input100" type="email" id= "Email" name="Email" value="{{ old('Email') }}">
            <span class="focus-input100"></span>
          </div>
           <!--        -- >

           <!-- password --> 
          <div class="p-t-13 p-b-9">
            <span class="txt1">
              Password
            </span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" id= "Password" name="Password" >
            <span class="focus-input100"></span>
          </div>
          <!--          -->


          <!-- Date --> 
          <div class="p-t-13 p-b-9">
            <span class="txt1">
              Date
            </span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Date is required">
            <input class="input100" type="date" id= "Date" name="Date" value="{{old ('Date') }}" >
            <span class="focus-input100"></span>
          </div>
          <!--          -->

          <!-- Gander --> 
          <div class="p-t-13 p-b-9" style="margin-top: 20px;">
            <span class="txt1">
              Gender : 
            </span>
          </div>
          <div class="validate-input" data-validate = "Date is required" style="margin: 35px;">
            <input  type="radio" id= "Gender" name="Gender" value="Male" value="{{old ('Gender') }}">Male
            <span class="focus-input100"></span>
          </div>


          <div class="validate-input" data-validate = "Date is required" style="margin: 35px;">
            <input  type="radio" id= "Gender" name="Gender" value="Female" >Female
            <span class="focus-input100"></span>
          </div>


          
          <!--          -->


          <div class="container-login100-form-btn m-t-17">
            <input class = "login100-form-btn" type="submit" name="Register" value="Register">
          </div>

          <div class="w-full text-center p-t-55">
            <span class="txt2">
              Already Have an Account?
            </span>

            <a href="login" class="txt2 bo1">
              Login now <br>
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