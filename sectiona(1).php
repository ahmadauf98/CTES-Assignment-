<!DOCTYPE html>
<html>
<head>
    <title>Critical Thinking Skills Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="ReadyStyle.css" type="text/css">
  </head>
<body>
<div >
	<div >
	
	
  <?php
  
  $con = mysqli_connect("localhost","root","","userslogin");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $sql = "SELECT * FROM sectiona INNER JOIN sectiona2 ON sectiona.studentID=sectiona2.studentID;";
 
  if($result = mysqli_query($con, $sql)){


 if(mysqli_num_rows($result) > 0){
	  
	  echo "<table id='dbs'><tr> 
	  <th> Student ID </th>
   <th> Matric Number </th>
   <th> Name of University </th>
   <th> Year of Study </th>
   <th> Gender </th>
   <th> Age Group </th>
   <th> Ethnic </th>
   <th> Nationality  </th>
   <th> Past year </th>
   <th>  GPA </th>
   <th> CGPA </th>
   <th> Current Year </th>
   <th> GPA </th>
   <th> CGPA </th>
   <th> Update       </th> </tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       
   echo "<tr><td>" . $row["studentID"]. "</td><td>" . $row["matricnumber"]. "</td><td> " . $row["nameofuni"]. "</td><td>". $row["yearofstudy"]. "</td><td>". $row["gender"]. "</td><td>". $row["agegroup"]. "</td><td>". $row["ethnic"]. "</td><td>". $row["nationality"]."</td><td>". $row["examyear1"]."</td><td>". $row["examgpa1"]."</td><td>". $row["examcgpa1"]."</td><td>". $row["examyear2"]."</td><td>". $row["examgpa2"]."</td><td>". $row["examcgpa2"]."</td><td><a href=\"edit.php?matricnumber=$row[matricnumber]\">Edit</a> | <a href=\"delete.php?matricnumber=$row[matricnumber]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td></tr>";
	}
	echo "</table>";
 }}else {
    echo "0 results";
  }

$con->close();
?> 
  
  
</div>
</div>
</body>
</html>
