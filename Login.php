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
    <title>Login</title>
  </head>
  <body>
    <h1>Login</h1>
    <nav>
        <a href="login.php"> Login </a> |
        <a href="register.php"> Register </a> |
        <a href="attendance.php"> Attendance </a> |
        <a href="grades.php"> Grade </a>|
        <a href="points.php"> Points </a> |
        <a href="report_card.php"> Report Card </a> 
    </nav>
    <br><br>
    <form action="login.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="register.php">Register here</a>.</p>
  </body>
</html>
