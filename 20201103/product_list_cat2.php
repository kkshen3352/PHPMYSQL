<?php
require_once("../db_connect.php");

$category = 1;
$page = 1;
$min=1000;

$sql_product = "SELECT * FROM products WHERE valid=1 AND category_id=$category AND price>=$min";
$result_product = $conn->query($sql_product);

$total_item = $result_product->num_rows;

// 目前在第 x 頁, 共 x頁
// 第 x~y 筆, 共 y筆
$page = 1;
$item_per_page = 10;
$start = ($page - 1) * $item_per_page;

$total_page = floor($total_item / $item_per_page) + 1;
if ($total_item % $item_per_page == 0) $total_page = $total_page - 1;

$first_item = ($page - 1) * $item_per_page + 1;

$last_item = $page * $item_per_page;
if ($last_item >= $total_item) $last_item = $total_item;

//判斷式
$sql = "SELECT products. *, category.name AS category_name FROM products JOIN category ON products.category_id = category.id WHERE products.valid=1 AND products.category_id=$category AND products.price>=$min LIMIT $start, $item_per_page";

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
                <div class="text-right"> 目前在第 <?= $page ?> 頁, 共 <?= $total_page ?> 頁 </div>
                <!-- <div class="text-right"> 第 <?= $first_item ?>~<?= $last_item ?>筆 , 共 <?= $total_item ?> 筆 </div> -->
                <thead>
                    <tr class="text-nowrap">
                        <!-- text-nowrap強制不換行 -->
                        <th>序號</th>
                        <th>分類</th>
                        <th>名稱</th>
                        <th>價錢</th>
                    </tr>
                </thead>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $row["id"] ?></td>
                            <td><?= $row["category_name"] ?></td>
                            <td><?= $row["intro"] ?></td>
                            <td><?= "$" . $row["price"] ?></td>
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