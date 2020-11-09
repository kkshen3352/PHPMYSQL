<?php
require_once("../db_connect.php");
$sql = "SELECT * FROM category";
$result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr class="text-nowrap"> 
                    <!-- text-nowrap強制不換行 -->
                        
                        <th>編號</th>
                        <th>名稱</th>
                        
                    </tr>
                </thead>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                        <tr>
            
                            <td><?= $row["id"] ?></td>
                            <td><?= $row["name"] ?></td>

                        <tr>
                    <?php  }
                }
                    ?>
            </table>



        </div>
    </div>
</body>

</html>
<?php
$conn->close();
?>