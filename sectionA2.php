<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "userslogin");

if(isset($_POST['login-button'])){

    $examyear1 = mysqli_real_escape_string($_POST['examyear1']);
    $examsem1 = mysqli_real_escape_string($_POST['examsem1']);
    $examgpa1 = mysqli_real_escape_string($_POST['examgpa1']);
    $examcgpa1 = mysqli_real_escape_string($_POST['examcgpa1']);
    $examyear2 = mysqli_real_escape_string($_POST['examyear2']);
    $examsem2 = mysqli_real_escape_string($_POST['examsem2']);
    $examgpa2 = mysqli_real_escape_string($_POST['examgpa2']);
    $examcgpa2 = mysqli_real_escape_string($_POST['examcgpa2']);

   
     $examyear1 = $_POST['examyear1'];
     $examsem1 = $_POST['examsem1'];
     $examgpa1 = $_POST['examgpa1'];
     $examcgpa1 = $_POST['examcgpa1'];
     $examyear2 = $_POST['examyear2'];
     $examsem2 = $_POST['examsem2'];
     $examgpa2 = $_POST['examgpa2'];
     $examcgpa2 = $_POST['examcgpa2'];

     $sql = "INSERT INTO sectiona2(examyear1, examsem1, examgpa1, examcgpa1, examyear2, examsem2, examgpa2, examcgpa2) 
     VALUES ('$examyear1','$examsem1','$examgpa1', '$examcgpa1', '$examyear2','$examsem2','$examgpa2', '$examcgpa2')";
     mysqli_query($con, $sql);
     header("Location: readypage.html");

}

?>

<html>
	<head>
	<title>Section 2A</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel = "stylesheet" type="text/css" href="SectionAStyles.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	
	<body>
	<h1 id="title">SECTION A : RESPONDENT PROFILE</h1>
<div id="form-outer">
  <form method="POST" action="sectionA2.php">

 <!-- Past/last year's examination results -->
 <div class="question-form">
 <div class="Results"><br><br>
   <label>8.Past/last year's examination results: </label>
 <div class="rowTab">
				<div class="row">
						<div class="col">
								<label for="input"> Year of examination: </label>
							<input type="text" name="examyear1" class="form-control" placeholder="eg:2016,2017,2018,etc">
						</div>
						<div class="col">
								<label for="input"> Semester: </label><h7><b><i>*Numbers only</i></b></h7>
							<input type="text" name="examsem1" class="form-control" placeholder="eg:1,2 ">
						</div>
					</div>
	</div>

<div class="rowTab">
		<div class="row">
				<div class="col">
						<label for="input">  a) GPA: </label><h7><b><i>*Numbers only ( in 2 d.p )</i></b></h7>
					<input type="text" name="examgpa1" class="form-control" placeholder="Last Semester" >
				</div>
				<div class="col">
						 <label for="input"> b) CGPA: </label><h7><b><i>*Numbers only ( in 2 d.p )</i></b></h7>
					 <input type="text" name="examcgpa1" class="form-control" placeholder="Current Semester" >
				 </div>
			</div>
</div>
</div><br><br>

<!-- This year's examination results:  -->
<div class="Results">
		<label>9.This year's examination results:  </label>
	<div class="rowTab">
				 <div class="row">
						 <div class="col">
								 <label for="input"> Year of examination: </label>
							 <input type="text" name="examyear2" class="form-control" placeholder="eg:2016,2017,2018,etc">
						 </div>
						 <div class="col">
								 <label for="input"> Semester: </label><h7><b><i>*Numbers only</i></b></h7>
							 <input type="text" name="examsem2" class="form-control" placeholder="eg:1,2">
						 </div>
					 </div>
	 </div>
 
 <div class="rowTab">
		 <div class="row">
				 <div class="col">
						 <label for="input">  a) GPA: </label><h7><b><i>*Numbers only ( in 2 d.p )</i></b></h7>
					 <input type="text" name="examgpa2" class="form-control" placeholder="Current Semester" >
				 </div>
				 <div class="col">
						 <label for="input"> b) CGPA: </label><h7><b><i>*Numbers only ( in 2 d.p )</i></b></h7>
					 <input type="text" name="examcgpa2" class="form-control" placeholder="Current Semester" >
				 </div>
			 </div>
 </div>
 </div>
</div>
 <a href="readypage.html"><button class="submit" id="submit" name="login-button">Next</button></a>
  </form>
</div>
</body>
</html>