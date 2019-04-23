<?php
        require "dbutil.php";
        $db = DbUtil::loginConnection();

        $stmt = $db->stmt_init();

        if($stmt->prepare("select * from player where player_last like ?") or die(mysqli_error($db))) {
                $searchString = '%' . $_GET['searchLastName'] . '%';
                $stmt->bind_param(s, $searchString);
                $stmt->execute();
                $stmt->bind_result($player_first, $player_last, $age, $school_year, $gpa);
                echo "<table border=1><th>First Name</th><th>Last Name</th><th>Age</th><th>School Year</th><th>GPA</th>\n";
                while($stmt->fetch()) {
                        echo "<tr><td>$player_first</td><td>$player_last</td><td>$age</td><td>$school_year</td><td>$gpa</td></tr>";
                }
                echo "</table>";

                $stmt->close();
        }

        $db->close();


?>
