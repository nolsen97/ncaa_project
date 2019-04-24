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
   $sql = $con->prepare("UPDATE supports SET contribution=? WHERE school=? AND sponsor_name=?");
   if (false === $sql){
      die('Error 1: ' . htmlspecialchars($con->error));
   }

   $sql->bind_param('iss', $_POST[contribution], $_POST[school], $_POST[sponsor]);
   if (false === $res){
      die('Error 2: ' . htmlspecialchars($sql->error));
   }

   $sql->execute();
   if (false === $res){
      die('Error 3: ' . htmlspecialchars($sql->error));
   }
   
   echo "1 record updated"; // Output to user
   mysqli_close($con);
?>
<br>
<div class="container">
<a href="../index.php">Home</a>
</div>

