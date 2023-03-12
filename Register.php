<!DOCTYPE html>
<html>
  <head>
     <style type="text/css">   
     body
   			{
	   		  background-color:#ADD8E6;
	   		  color:black;
	   		  font-family:arial;
	   		  font-size:25;
	   		  text-align:center;
   			} 
   			table
   			{
	   			margin:auto;
	   			width: 80%;
	    		text-align:center;
	    		color: black;
	    		border:3px black solid;
	   			background-color: lavender;
   			}
   			td
   			{
	   			border:3px black solid;
	   			padding:5;
   			}

    </style>
    <title>Register</title>
  </head>
  <body>
    <h1>Register</h1>
        <a href="login.php"> Login </a>  |   
        <a href="register.php"> Register </a> |  
        <a href="attendance.php"> Attendance </a> |
        <a href="grades.php"> Grades </a> |  
        <a href="points.php"> Points </a> |  
        <a href="report_card.php"> Report Card </a> 
    <br><br>
    <form action="register.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br><br>
      <label for="confirm_password">Confirm Password:</label>
      <input type="password" id="confirm_password" name="confirm_password"><br><br>
      <input type="submit" value="Register">
    </form>
  </body>
</html>
<?php
  // Start the session
  //session_start();
  //what is this ^ 
  
  $con = mysqli_connect('localhost','root','','studentinvolvement');

  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
    // Get the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    
    // Check if the passwords match
    if ($password != $confirm_password) 
    {
      $error = "Passwords do not match";
    } 
    else 
    {
        //query to find the username the user inputs
        $sql = "SELECT students, points, grade, username FROM `studentinvolvement` WHERE username='$username'";
        
        $result = mysqli_query($con,$sql);
        $colCount = mysqli_num_fields($result);
	    $rowCount = mysqli_num_rows($result);
	    
	    echo "Report Card";
        echo "<table>";
        echo "<tr> <td>Student Name</td> <td>Points</td> <td>Grade</td> <td>Username</td> </tr>";

        for ($r=0; $r<$rowCount; $r++) 
	    {
	        echo "<tr>";
			$data = mysqli_fetch_row($result);
      
	    	for ($c=0; $c<$colCount; $c++)
		    {
			   echo "<td>";
			   echo "$data[$c]";
			   echo "</td>";
	    	}	
	        echo "</tr>";
    	}

	  echo "</table>";

      // TODO: Check if the username is already taken in the database
      // If the username is not taken, create a new account in the database
      // TODO: Hash the password before storing it in the database
      
      // Set a session variable to indicate that the user is logged in
      $_SESSION["loggedin"] = true;
      
      // Redirect to the main page
      header("Location: main.php");
      exit;
    }
  }
?>
