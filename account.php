<?php
session_start();
// Echo session variables that were set on previous page
echo "Account Username: " . $_SESSION["username"] . ".<br>";
//echo "Favorite animal is " . $_SESSION["password"] . ".";
?>

<html>
<body>
<p><br></p>
<a href="./logout.php">Log Out<a>
</body>
</html>
