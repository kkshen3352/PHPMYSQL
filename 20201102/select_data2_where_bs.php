<?php
require_once("db_connect.php");
$id = 20;
$sql = "SELECT name, height, weight, phone, email FROM users WHERE id=$id";
$result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">

<head>
    <title>User Card</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            </div>
            <aside class="col-md-4">
                <div class="card">
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <div class="card-body">

                                <h5 class="card-title"><?= $row["name"] ?></h5>
                                <div><?= $row["email"] ?></div>
                                <ul class="list-unstyled">
                                    <li>身高: <?= $row["height"] ?> cm</li>
                                    <li>體重: <?= $row["weight"] ?> kg</li>
                                </ul>
                                <a href="" class="btn btn-primary btn-block">Follow Me</a>
                            </div>
                        <?php
                        }
                    } else { ?>
                        <div class="card-body">
                            <h5 class="card-title">沒有使用者</h5>
                            <div>該使用者不存在</div>
                        </div>
                    <?php }
                    ?>
                </div>

            </aside>


        </div>
    </div>
</body>

</html>