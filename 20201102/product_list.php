<?php
require_once("db_connect.php");
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

?>
<!doctype html>
<html lang="en">

<head>
  <title>Product List</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <table class="table table-bordered table-sm">
      <thead>
        <tr>
          <th>序號</th>
          <th>名稱</th>
          <th>價錢</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?= $row["id"] ?></td>
              <td><?= $row["name"] ?></td>
              <td class="text-right"><?= $row["price"] ?></td>
            <tr>
          <?php  }
        }
          ?>
      </tbody>

    </table>


  </div>

</body>

</html>