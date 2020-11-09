<?php
require_once("db_connect.php");
//promo
$sql = "SELECT member.* FROM member
JOIN promo ON promo_user = member.id
";
$result = $connect->query($sql);
//member
// $sql_member = "SELECT * FROM member";
// $result_member = $connect->query($sql_member);

// if ($result_member->num_rows > 0) {
//     while ($row_member = $result_member->fetch_assoc()) {
//         //echo $row_member["name"];
//     }
// }


?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .member_img {
            width: 72px;
            height: 72px;
        }

        .member_img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: 1px solid #aaaaaa;
        }
    </style>
</head>

<body>
<div class="container">
        <div class="table-responsive">
            <table class="table table-bordered table-sm">
                    <th>序號</th>
                    <th>名子</th>
                    <th>優惠名稱</th>
                    <th>優惠類別</th>
                    <th>優惠日期</th>
                </tr>
            </thead>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { 
                    ?>
                    <tr>
                        <td><?= $row["id"] ?></td>
                        <td><?= $row_member["name"]?></td>
                        <td><?= $row["promo_user"] ?></td>
                        <td><?= $row["promo_class"] ?></td>
                        <td><?= $row["promo_data"] ?></td>
                    <tr>
                <?php  }
            }
                ?>
                </table>
        </div>
    </div>
</body>

</html>
