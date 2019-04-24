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
   if (false === $sql){
      die('Error 1: ' . htmlspecialchars($con->error));
   }
   $res = $sql->bind_param('ss', $_POST[winner], $_POST[opponent]);
   if (false === $res){
      die('Error 2: ' . htmlspecialchars($sql->error));
   }
   $res = $sql->execute();
   if (false === $res){
      die('Error 3: ' . htmlspecialchars($sql->error));
   }
   echo "1 record deleted"; // Output to user
   mysqli_close($con);
?>
<br>
<div class="container">
<a href="../index.php">Home</a>
</div>

