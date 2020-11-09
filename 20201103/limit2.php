<?php
require_once("../db_connect.php");
$sql = "SELECT * FROM users WHERE valid=1 LIMIT 1,4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["name"] . "<br>";
    }
} else {
}
