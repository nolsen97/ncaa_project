<?php
   include_once("./library.php"); // To connect to the database
   $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
   // Check connection
   if (mysqli_connect_errno())
     {
     echo "Failed to connect to MySQL: " . 
mysqli_connect_error();
     }
   // Form the SQL query (an INSERT query)
   $sql="INSERT INTO coach (coach_first, coach_last, coach_wins, coach_loses, coach_total_games, coach_age)
   VALUES
   ('$_POST[firstname]','$_POST[lastname]', '$_POST[wins]', '$_POST[loses]', 0, '$_POST[age]')";
   
   if (!mysqli_query($con,$sql))
     {
     die('Error: ' . mysqli_error($con));
     }
   echo "1 record added"; // Output to user
   mysqli_close($con);
?>
<br>
<div class="container">
<a href="../index.php">Home</a>
</div>
