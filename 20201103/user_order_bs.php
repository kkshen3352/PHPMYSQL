<?php
require_once("../db_connect.php");

$user_id = 1;

$user_sql = "SELECT * FROM users WHERE id=$user_id";
$result_user = $conn->query($user_sql);
//索取購買人名稱
$row_user=$result_user->fetch_assoc();
//title
$user_name=$row_user["name"];

$sql = "SELECT user_order.*, products.name AS product_name, products.price FROM user_order JOIN products ON user_order.product_id = products.id
WHERE user_order.user_id=$user_id";

?>

<!doctype html>
<html lang="en">

<head>
    <title><?= $user_name ?>的購買紀錄</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3><?= $row_user["name"] ?> 的購買紀錄 </h3>
        <div class="table-responsive">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr class="text-nowrap">
                        <!-- text-nowrap強制不換行 -->
                        <th>訂購日期</th>
                        <th>品項</th>
                        <th>單價</th>
                        <th>數量</th>
                        <th>小計</th>
                
                    </tr>
                </thead>
                <?php
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                         ?>
                        <tr>
                            <td><?= $row["order_date"] ?></td>
                            <td><?= $row["product_name"] ?></td>
                            <td><?= $row["price"] ?></td>
                            <td><?= $row["amount"] ?></td>
                            <td><?= $row["price"]*$row["amount"] ?></td>
                           
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