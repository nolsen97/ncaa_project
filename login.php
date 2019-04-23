 <?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["username"] = "nso4wg_b";
$_SESSION["password"] = "uvachamp19";
echo "You are logged in as guest";
?>
<form action="admin.php" method="post">
Username: <input type="text" name="user"><br>
Password: <input type="text" name="pass"><br>
<input type="submit">
</form>
</body>
</html> 
