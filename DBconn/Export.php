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
   $sql="SELECT * FROM player";
   #$sql = "SELECT * FROM player";

   if (!$result = mysqli_query($con,$sql))
     {
     die('Error: ' . mysqli_error($con));
     }
$users = array();
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$users[] = $row;
	}
} 
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=exported_data.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('player_first', 'player_last', 'age', 'school_year', 'gpa'));
 
if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
   echo "exported"; // Output to user
   mysqli_close($con);
?>
