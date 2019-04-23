<?php
   include_once("./library.php"); // To connect to the database
   $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
   // Check connection
   if (mysqli_connect_errno())
     {
     echo "Failed to connect to MySQL: " .
mysqli_connect_error();
     }
   // Form the SQL query (an DELETE query)
   //$sql="DELETE FROM play where winner='$_POST[winner]' AND opponent='$_POST[opponent]' AND year=$_POST[year]";
   $sql = $con->prepare("DELETE FROM play where winner=? AND opponent=?"); 
   $sql->bind_param('ss', $_POST[winner], $_POST[opponent]);
   $sql->execute();
   //if (!mysqli_query($con,$sql))
   //  {
   //  die('Error: ' . mysqli_error($con));
   //  }
   echo "1 record deleted"; // Output to user
   mysqli_close($con);
?>
<br>
<div class="container">
<a href="../index.html">Home</a>
</div>

