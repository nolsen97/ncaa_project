<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  table, th, td {
        border: 1px solid black;
  }
  </style>
</head>
<body>
<h2 style="text-align:center;">Average GPA per School</h2>
<?php
require_once('./library.php');
$con = new mysqli($SERVER, $USERNAME, $PASSWORD,
$DATABASE);
// Check connection
if (mysqli_connect_errno()) {
echo("Can't connect to MySQL Server. Error code: " .
mysqli_connect_error());
return null;
}
// Form the SQL query (a SELECT query)
$sql="SELECT school, avg( gpa ) AS average
FROM player
NATURAL JOIN play_for
GROUP BY school
ORDER BY average DESC";
$result = mysqli_query($con,$sql);
// Print the data from the table row by row
echo "<table style='width:100%'>";
echo "<tr><th>School</th><th>Average GPA</th></tr>";
while($row = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<th>" . $row['school'] . "</th>";
echo "<th>" . $row['average'] . "</th>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

</body>
</html>

