<!DOCTYPE html>
<html lang="en">

<head>
    <title>Critical Thinking Skills (CTS Test)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="LoginStyle.css" type="text/css">
  </head>

<body>
<?php
require('db.php');
session_start(); 
// If form submitted, insert values into the database.
if (isset($_POST['matricnumber'])){
        // removes backslashes
	$matricnumber = stripslashes($_REQUEST['matricnumber']);
        //escapes special characters in a string
	$matricnumber = mysqli_real_escape_string($con,$matricnumber);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM students WHERE matricnumber='$matricnumber'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysqli_error($con));
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['matricnumber'] = $matricnumber;
         }else{
	echo '<script language="javascript">';
echo 'alert("Matric No is incorrect, Please do it again, tq.")';
echo '</script>';
header ("Location: LoginPage.php");
	}if($rows==2){
		$_SESSION['password'] = $password;
            // Redirect user to index.php
	    header("Location: sectionA.html");
         }else{
			 //password incorrect
"<div class='modal-dialog'>
	<div class='modal-content'>
		<div class='modal-heading'>
			<h2 class='text-center'>Both Matric No and Password are incorrect. You will be redirected to Registration Form</h2> </div></div></div>";
		 header("Location: registration.php");}
		 }else{
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-heading">
			<h2 class="text-center">Log in</h2>
		</div>
		<hr />
		<div class="modal-body">
			<form method="post" action="" role="form" name="LoginPage" >
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
						<span class="glyphicon glyphicon-user"></span>
						</span>
						<input type="text" class="form-control" name="matricnumber" placeholder="Matric Number"  required />
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
						<span class="glyphicon glyphicon-lock"></span>
						</span>
						<input type="password" class="form-control" name="password" placeholder="Password"  required />
					</div>
				</div>
				<div class="form-group text-center" name="login-button">
						<a href="#"><button name= "register_btn" class="btn btn-primary btn-lg">Log In</button></a>
						
				</div>
				
				
			</form>
			<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
		</div>
	</div>
</div>
<?php } ?>
</body>
</html>
