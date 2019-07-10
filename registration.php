<!DOCTYPE html>
<html>
<head>
    <title>Critical Thinking Skills (CTS Test)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="LoginStyle.css" type="text/css">
  </head>
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['matricnumber'])){
        // removes backslashes
	$matricnumber = stripslashes($_REQUEST['matricnumber']);
        //escapes special characters in a string
	$matricnumber = mysqli_real_escape_string($con,$matricnumber); 
	$email=stripslashes($_REQUEST['email']);
	$password = stripslashes($_REQUEST['password']);
	
        $query = "INSERT into students (matricnumber,email, password)
VALUES ('$matricnumber','$email','".md5($password)."')";
        $result = mysqli_query($con,$query);
        if($result){
            header("Location: sectionA.php");	
        }
    }else{
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-heading">
			<h2 class="text-center">Register</h2>
		</div>
		<hr />
		<div class="modal-body">
			<form name="registration" action="registration.php" method="post">
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
						<input type="email" class="form-control" name="email" placeholder="Email"  required />
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
				<div class="form-group text-center" ></div>
						<a href="sectionA.php"><button name="login-button" class="btn btn-primary btn-lg">Register</button></a>
						<br><br>
			
			</form>
		</div>
	</div>
</div>
<?php } ?>
</body>
</html>