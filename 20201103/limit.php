<?php
require_once("../db_connect.php");
$sql = "SELECT * FROM users WHERE valid=1 ORDER BY name LIMIT 8";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["name"] . "<br>";
    }
} else {
}
