<?php
require_once("../db_connect.php");

$sql = "SELECT products. *, category.name AS category_name FROM products JOIN category ON products.category_id = category.id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        var_dump($row);
        echo "<br>";
    }
} else {
}

$conn->close();
