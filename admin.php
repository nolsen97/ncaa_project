<?php
session_start();
if ($_POST['user'] == 'nso4wg_a' && $_POST['pass'] == 'secretpassword') {
	$_SESSION['username'] = 'nso4wg_a';
	$_SESSION['password'] = 'secretpassword';
	echo 'You are now logged in as admin';
	//echo $_SESSION['username'];
	//echo $_SESSION['password'];
}else{
	echo 'Wrong username or password';
}
?>
