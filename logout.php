 <?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>
<p>You are now logged out!</p>
<a href="./index.php">Home</a>
</body>
</html> 
