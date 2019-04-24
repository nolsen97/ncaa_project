 <?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
//$_SESSION["username"] = "nso4wg_b";
//$_SESSION["password"] = "uvachamp19";
if ($_SESSION['username'] == 'nso4wg_a'){
	echo "You are already logged in as admin";
}else {
	echo "You are logged in as guest";
}
?>
<form action="admin.php" method="post">
Username: <input type="text" name="user"><br>
Password: <input type="password" name="pass"><br>
<input type="submit">
</form>
<a href="./index.php">Home</a>

</body>
</html> 
