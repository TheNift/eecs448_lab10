<!DOCTYPE html>
<html>
    <head> 
        <title>Post Deleter</title>
    </head>
    <body>
        <div>
            <h1>Success!</h1>
            <table>
                <tr>
                    <th>Deleted PUID:</th>
                </tr>
                <?php
                    $PUIDS = $_POST["Posts"];
                    $mysqli = new mysqli("mysql.eecs.ku.edu", "j470k652", "ahc4Eo4r", "j470k652");
                    foreach ($PUIDS as $PUID) {
                        echo "<tr><td>" . $PUID . "</td></tr>";
                        $query = "DELETE FROM Posts WHERE post_id='$PUID'";
                        $result = $mysqli->query($query);
                    }
                    $mysqli->close();
                ?>
            </table>
        </div>
    </body>
</html>