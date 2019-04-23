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
//	$sql="UPDATE supports SET contribution=$_POST[contribution] WHERE school='$_POST[school]' AND sponsor_name='$_POST[sponsor]'";
   $sql->bind_param('iss', $_POST[contribution], $_POST[school], $_POST[sponsor]);
   $sql->execute();
   //if (!mysqli_query($con,$sql))
   //  {
   //  die('Error: ' . mysqli_error($con));
   //  }
   echo "1 record updated"; // Output to user
   mysqli_close($con);
?>
<br>
<div class="container">
<a href="../index.html">Home</a>
</div>

