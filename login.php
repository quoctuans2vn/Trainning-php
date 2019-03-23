<?php
  $name = $usrname = $email = $age = $pass = "";
  $check = 1;
  $emlPtt = '/^(?:[A-Za-z0-9]+[._]?[A-Za-z0-9]+)+\@(?:[A-Za-z]+[0-9]*)(?:(\.\w+))+?(?:(?!\1)\.\w+)?$/m';
  $agePtt = '/\d{1,3}/';

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
  	if (empty($_POST['name']) || empty($_POST['usrname']) || empty($_POST['email']) || empty($_POST['age']) || empty($_POST['pass'])){
  		$check = 0;
  	}
  	else{
  		$name = test_input($_POST['name']);
  		$usrname = test_input($_POST['usrname']);
  		$email = test_input($_POST['email']);
  		$age = test_input($_POST['age']);
  		$pass = test_input($_POST['pass']);
  		if (!preg_match($emlPtt, $email) || !preg_match($agePtt, $age) || strlen($pass) < 8){
  			$check = 0;
  		}
   	}
  } 
  else{
  	$check = 0;
  }

  function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
} 
?>
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
    <title>Status Register</title>
  </head>
  <body class="container 
  <?php if ($check == 0) echo "bg-warning"; else echo "bg-success";?>">
  	<h1><?php if ($check == 0) echo "Sorry. Something went wrong"; else echo "Congratulation!";?></h1>
  	<div><?php if ($check == 0) echo "Please return to the register page to sign up again"; else echo "Here are some details about you";?></div>
  	<?php if($check == 0) echo "<button href="index.php" class="btn btn-danger">Return back</button>" ?>
  	<?php if($check == 1) 
  		
  	?>
  </body>
  
  