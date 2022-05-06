<?php
    $UID_Input = $_POST["uid"];
    $mysqli = new mysqli("mysql.eecs.ku.edu", "j470k652", "ahc4Eo4r", "j470k652");

    if ($mysqli->connect_errno) {
        echo $mysqli->connect_error;
        exit();
    }

    if ($UID_Input == "") {
        echo "Error: User ID empty!";
        exit();
    }

    $query = "SELECT user_id FROM Users WHERE user_id='".$UID_Input."'";
    $result = $mysqli->query($query);

    if ($result->num_rows > 0) {
        echo "Error: User ID already in use!";
    } 
    else {
        $query2 = "INSERT INTO Users (user_id) VALUES ('".$UID_Input."')";
        $mysqli->query($query2);
        echo "User ID \"" . $UID_Input . "\" created!";
    }

    $mysqli->close();
?>