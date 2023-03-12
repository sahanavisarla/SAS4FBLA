<html>
  <head>
   <title>FBLA</title>
   <style type="text/css">   
     body
   			{
	   		  background-color:pink;
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
  </head>
<body>
  <?php
    //run this on localhost

    //Generate a report at end of the quarter to show points per student in each grade.

    $con = mysqli_connect('localhost','root','','studentinvolvement');
    $sql = "SELECT students, points, grades FROM `studentinvolvement`";
    //Need to make this database ^
    $result = mysqli_query($con,$sql);

     $colCount = mysqli_num_fields($result);
	  $rowCount = mysqli_num_rows($result);

    echo "<table>";
    echo "<tr> <td>Student Name</td> <td>Points</td> <td>Grade</td> </tr>";

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

  ?>
</body>
</html>
