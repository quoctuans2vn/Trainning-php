<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
	  <link rel="stylesheet" href="style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Training</title>
  </head>
<body class="bg-dark container" >
	<form class="bg-light form-register col-md-5 col-sm-8" action="login.php" method="post">
			<!--<h1 class="text-center py-3">SIGN UP</h1>
      <hr/>-->
      <div class="m-2">
        <label for="full-name">Full name</label>
        <input type="text" id="full-name" class="form-control" placeholder="Your full name" name="name"/>
        <div class="invalid-feedback">This is required</div>
      </div>
      <div class="m-2">
        <label for="email">Email</label>
        <input type="text" id="email" class="form-control" placeholder="you@example.com" name="email"/>
        <div class="invalid-feedback">This is required</div>
      </div>
      <div class="m-2">
        <label for="age">Age</label>
        <input type="text" id="age" class="form-control" placeholder="Your age" name="age"/>
        <div class="invalid-feedback">This is required</div>
      </div>
      <div class="m-2">
        <label for="">Username</label>
        <input type="text" id="username" class="form-control" placeholder="Pick a username" name="usrname"/>
        <div class="invalid-feedback">This is required</div>
      </div>
      <div class="m-2">
        <label for="pass">Password</label>
        <input type="password" id="pass" class="form-control" placeholder="Create a password" name="pass"/>
        <div class="invalid-feedback">This is required</div>
        <small class="text-muted">Make sure it's more than 15 characters OR at least 8 characters.</small>
      </div>
      <hr/>
      <button type="submit" id='test' class="btn btn-success btn-lg" align="center">Sign up for join us</button>
	</form>
  <script src="checkvalid.js"></script>
	
</body>
</html>