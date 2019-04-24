<?php
session_start();
if ($_SESSION['username'] != 'nso4wg_a'){
	$_SESSION['username'] = 'nso4wg_b';
        $_SESSION['password'] = 'uvachamp19';
}
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  table, th, td {
        border: 1px solid black;
  }
  </style>
</head>
<body>

<div class="contianer">
<div class="jumbotron">
	<h1 class="text-center">NCAA Bracket Project</h1>	
</div>
<p style="text-align:center;"><img src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Famhsnewspaper.com%2Fwp-content%2Fuploads%2F2016%2F11%2FNCAA-Basketball-900x871.png&f=1" alt="NCAA Logo" width="300" height="300" padding="5px"></p>
<hr>
<table style="width:100%">
<tr>
	<th><p class="text-center"><a href="./login.php">Login to Admin</a></p></th>
	<th><p class="text-center"><a href="./DBconn/TeamSelect.php">View Teams</a></p></th>
	<th><p class="text-center"><a href="./ajax/ajaxPlayers/index.html">Search Players by Last Name</a></p></th>	
	<th><p class="text-center"><a href="./DBconn/AvgGpa.php">Average GPA per School</a></p></th>
</tr>
<tr>
	<th><p class="text-center"><a href="./DBconn/PersonsForm.html">Coach Insert</a></p></th>
	<th><p class="text-center"><a href="./DBconn/DeleteForm.html">Delete Games</a></p></th>
	<th><p class="text-center"><a href="./DBconn/UpdateForm.html">Update Sponsor Contributions</a></p></th>
	<th><p class="text-center"><a href="./DBconn/ExportForm.html">Export Player Data</a></p></th>
		
</tr>
</table>
<p class="text-center"><a href="./account.php">Account</a></p>
</div>
</body>

</html>
