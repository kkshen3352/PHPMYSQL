<?php
require_once("../db_connect.php");
$product_id = 1;

$products_sql = "SELECT * FROM products WHERE id=$product_id";
$result_product = $conn->query($products_sql);
while ($row_product = $result_product->fetch_assoc()) {
    $products_name = $row_product["name"];
}

$sql = "SELECT user_order.*, products.name AS product_name, products.price, users.name AS user_name FROM user_order 
JOIN products ON user_order.product_id = products.id 
JOIN users ON user_order.user_id = users.id 
WHERE user_order.product_id ='$product_id'
";
$result = $conn->query($sql);

?>

<html lang="en">

<head>
    <title> <?= $products_name ?>訂購資料</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="py-2"><?= $products_name ?> 的訂購資料</div>

        <table class="table table-bordered table-sm">
            <thead>
                <tr class="text-nowrap">
                    <!-- text-nowrap強制不換行 -->
                    <th>日期</th>
                    <th>訂購者</th>
                    <th>單價</th>
                    <th>數量</th>
                    <th>小計</th>
                </tr>
            </thead>
            <?php
            $total = 0;

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?= $row["order_date"] ?></td>
                        <td><?= $row["user_name"] ?></td>
                        <td class="text-right"><?= $row["price"] ?></td>
                        <td class="text-right"><?= $row["amount"] ?></td>
                        <td class="text-right"><?= $row["price"] * $row["amount"] ?></td>

                <?php
                    $total += $row["price"] * $row["amount"];
                }
            }
                ?>
        </table>
        <div class="py-2 text-right"> <?= $total ?>
            總計
        </div>


    </div>
</body>

</html>
<?php
$conn->close();
?>