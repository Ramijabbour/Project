<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" 	 href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset=md-1">
				<div class="row">	
					<div class="col-md-5 register-left">
						<img src="img/Down.png" width="100" height="100">
						<h3>Join Us</h3>
						<p>Enjoy our great site features</p>
						<button type="button" class="btn btn-primary">About Us</button>
					</div>
					<div class="col-md-7 register-right">
						<h2>Register Here</h2>

<form class="form-group" method="post" action="Register">
    {{ csrf_field() }}
  <fieldset>
  	<div class="register-form">


      <div class="form-group">
      <label for="Name" class="col-md-2 control-label">Name</label>

      <div class="col-md-5">
        <input type="text" class="form-control" style="width: 400px" id="Name" name="Name" value="{{ old('Name')}}" placeholder="Name  "required>

      </div>
    </div>



    <div class="form-group">
      <label for="Email" class="col-md-2 control-label">Email</label>

      <div class="col-md-5">
        <input type="email" style="width: 400px" class="form-control" id="Email" name="Email" value=" {{ old('Email')}} " placeholder="Email" required>
      </div>
    </div>
    <div class="form-group">
      <label for="Password" class="col-md-2 control-label">Password</label>

      <div class="col-md-5">
        <input type="password" class="form-control" style="width: 400px" id="Password" name="Password" placeholder="Password" required>

      </div>
    </div>
  <div class="form-group">
      <label for="Date" class="col-md-2 control-label"> Date</label>

      <div class="col-md-5">
        <input type="date" class="form-control" id="Date" style="width: 400px" name="Date" required>

      </div>
    </div>

      <div class="form-group">
      <label for="Phone" class="col-md-2 control-label"> phone </label>

      <div class="col-md-5">
        <input type="text" class="form-control" id="phone" name="phone" style="width: 400px" placeholder="Phone Number" required>
      </div>
    </div>

   
    <div class="form-group">
      <input class = "btn btn-info button" type="submit" style="margin-left: 270px ; width: 40%" name="register" value="Register" required>
    </div>

    </div>
  </fieldset>
</form>


				</div>
			</div>
		</div>
	</div>
</body>
</html>