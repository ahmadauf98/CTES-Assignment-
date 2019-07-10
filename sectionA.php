<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "userslogin");

if(isset($_POST['login-button'])){

    $matricnumber = mysqli_real_escape_string($_POST['matricnumber']);
    $nameofuni = mysqli_real_escape_string($_POST['nameofuni']);
    $yearofstudy = mysqli_real_escape_string($_POST['yearofstudy']);
    $gender = mysqli_real_escape_string($_POST['gender']);
    $agegroup = mysqli_real_escape_string($_POST['agegroup']);
    $ethnic = mysqli_real_escape_string($_POST['ethnic']);
    $nationality = mysqli_real_escape_string($_POST['nationality']);

   
     $matricnumber = $_POST['matricnumber'];
     $nameofuni = $_POST['nameofuni'];
     $yearofstudy = $_POST['yearofstudy'];
     $gender = $_POST['gender'];
     $agegroup = $_POST['agegroup'];
     $ethnic = $_POST['ethnic'];
     $nationality = $_POST['nationality'];
     $sql = "INSERT INTO sectiona(matricnumber, nameofuni, yearofstudy, gender, agegroup, ethnic, nationality) 
	 VALUES ('$matricnumber','$nameofuni','$yearofstudy', '$gender', '$agegroup', '$ethnic', '$nationality')";
     mysqli_query($con, $sql);
     header("Location: sectionA2.php");


}

?>

<html>
	<head>
	<title>Section 1A</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel = "stylesheet" type="text/css" href="SectionAStyles.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script type="text/javascript">
function Nationality(){
 var element=document.getElementById('nationality').value
 if(element=='Pick your nationality'||element=='Others')
   document.getElementById("new").style.display="block";
   
 else  
        document.getElementById("new").style.display="none";
}

function Ethnic(){
 var element=document.getElementById('ethnic').value
 if(element=='Pick your ethnic'||element=='Others')
   document.getElementById("new1").style.display="block";
 else  
        document.getElementById("new1").style.display="none";
}
</script>
	</head>
	
	<body>
	<h1 id="title">SECTION A : RESPONDENT PROFILE</h1>
    <div id="form-outer">
  <p id="description">
		<b>Instruction: Please tick the boxes that are applicable to you or specify otherwise.</b>
  </p>
  <form method="POST" action="sectionA.php">

	<!-- Registration Question -->
    <div class="rowTab">
      <div class="labels">
        <label id="name-label" for="MatricNumber">1.Registration/ Matriculation number: </label>
      </div>
      <div class="rightTab">
			<input type="text" name="matricnumber" class="form-control" placeholder="eg:WIF160007" required>
      </div>
	</div>
	
	<!-- Name Of University Question -->
    <div class="rowTab">
      <div class="labels">
        <label id="name-label" for="University">2.Name of University: </label>
      </div>
      <div class="rightTab">
			<input type="text" name="nameofuni" class="form-control" placeholder="eg:University Of Malaya" required>
      </div>
	</div>
	
	<!-- Year Of Study Question -->
    <div class="rowTab">
      <div class="labels">
        <label id="name-label" for="YearOfStudy">3.Year Of Study: </label>
      </div>
      <div class="rightTab">
			<input type="text" name="yearofstudy" class="form-control" placeholder="eg:first,second,third,etc" required>
      </div>
	</div>

	<!-- Gender Question -->
    <div class="rowTab">
      <div class="labels">
        <label for="currentPos">4.Gender:</label>
      </div>
      <div name="gender" class="rightTab">
			<select name="gender" class="custom-select" required>
      <option disabled value>Select an option</option>
	  <option  value="Male">Male</option>
	  <option value="Female">Female</option>
    </select>
	  </div>
	</div>

	<!-- Age Group Question -->
	<div class="rowTab">
			<div class="labels">
			  <label for="currentPos">5.Age Group:</label>
			</div>
			<div class="rightTab">
			<select name="agegroup" class="custom-select" required>
			<option disabled value>Select an option</option>
			<option value="Below 18 years">Below 18 years</option>
			<option value="18 to 21 Years">18 to 21 Years</option>
			<option value="22 to 25 Years">22 to 25 Years</option>
			<option value="Above 25 Years">Above 25 Years</option>
		  </select>
			</div>
		  </div>

    <!-- Ethic Group Question -->
    <div class="rowTab">
      <div class="label">
        <label for="userRating">6.Ethnic Group: </label>
      </div>
      <div class="rightTab">
	  <select name="ethnic" id="ethnic" class="custom-select" onchange="Ethnic();">
			<option disabled value>Select an option</option>
			<option value="Malay">Malay</option>
			<option value="Chinese">Chinese</option>
			<option value="Indian">Indian</option>
			<option value="Others" >Others</option>
		  </select>
		  <br><br>
			<input type="text" name="ethnic" id="new1" style='display:none;' placeholder="Please state here"/>
			
      </div>
	</div>
	
	 <!-- Nationality Group Question -->
	 <div class="rowTab">
			<div class="label">
			  <label for="userRating">7.Nationality: </label>
			</div>
			<div class="rightTab">
			<select name="nationality" id="nationality" class="custom-select"  onchange="Nationality();">
			<option disabled value>Select an option</option>
			<option  value="Malaysian">Malaysian</option>
			<option value="Chinese(China)">Chinese(China)</option>
			<option value="Indonesia">Indonesia</option>
			<option value="Pakistani">Pakistani</option>
			<option value="Others">Others</option>
		  </select>
		  <br><br>
			<input type="text" name="nationality" id="new" style='display:none;' placeholder="Please state here"/>
			
			
			</div>
		  </div>
			<a href="sectionA2.php"><button class="submit" id="submit" name="login-button">Next</button></a>
  </form>
</div>
</body>
</html>