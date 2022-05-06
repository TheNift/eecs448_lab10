<?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "j470k652", "ahc4Eo4r", "j470k652");
    $query = "SELECT user_id FROM Users";
    $result = $mysqli->query($query);
    echo "USERS:<br>";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo $row["user_id"] . "<br>";
        }

        $result->free();
    } 
    else {
        echo "Error: No users in database.";
    }

    $mysqli->close();
?>