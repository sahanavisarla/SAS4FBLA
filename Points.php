<!DOCTYPE html>
<html>
  <head>
    <title>Student Points - Points</title>
  </head>
  <body>
    <?php
      session_start();
      
      // Check if the user is logged in
      if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        // If the user is not logged in, redirect to the login page
        header("Location: login.php");
        exit;
      }
    ?>
    
    <h1>Points</h1>
    
    <p>Here is a list of events and the points you can earn:</p>
    
    <ul>
      <li>School Event: 5 points</li>
      <li>Sports Event: 3 points</li>
      <li>Volunteering: 10 points</li>
    </ul>
  </body>
</html>
