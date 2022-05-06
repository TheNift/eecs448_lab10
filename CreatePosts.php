<?php
    $UID_Input = $_POST["uid"];
    $Post_Input = $_POST["postbox"];
    $post_id_gen = crc32 ($Post_Input);
    $mysqli = new mysqli("mysql.eecs.ku.edu", "j470k652", "ahc4Eo4r", "j470k652");

    if ($mysqli->connect_errno) {
        echo $mysqli->connect_error;
        exit();
    }

    if ($Post_Input == "") {
        echo "Error: Post is empty!";
        exit();
    }

    $query = "SELECT user_id FROM Users WHERE user_id='".$UID_Input."'";
    $result = $mysqli->query($query);

    if ($result->num_rows > 0) {
        $query2 = "INSERT INTO Posts (post_id, content, author_id) VALUES ('".$post_id_gen."', '".$Post_Input."', '".$UID_Input."')";
        $mysqli->query($query2);
        echo "Post Created!";
    } 
    else {
        echo "Error: No such UID found.";
    }

    $mysqli->close();
?>