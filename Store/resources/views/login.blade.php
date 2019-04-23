@extends('master')
@section('content')
  <form class="form-horizontal" method="post" action="login">
    {{ csrf_field() }}
  <fieldset>
    <legend style="padding: 20px;"> Login </legend>

    <div class="form-group">
      <label for="email" class="col-md-2 control-label">Email</label>

      <div class="col-md-10">
        <input type="email" class="form-control" id="email" name="email" value=" {{ old('email')}} " placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="password" class="col-md-2 control-label">Password</label>

      <div class="col-md-10">
        <input type="password" class="form-control" id= "password" name="password" placeholder="Password">

      </div>
    </div>
 
    <div class="form-group">
      <input class = "btn btn-info btn-raised btn-block" type="submit" name="login" value="login">
    </div>
  </fieldset>
</form>

    <div>
    @foreach($errors->all() as $error)
      {{ $error }} <br>
    @endforeach
    </div>
@stop
