<?php
require_once("../db_connect.php");
//網址php?page=1
$page = $_GET["page"];
$category = $_GET["category"];

//讀取分類
$sql_category = "SELECT * FROM category";
$result_category = $conn->query($sql_category);

//讀取產品
if ($category == 0) {
    $sql_product = "SELECT * FROM products WHERE valid=1";
} else {
    $sql_product = "SELECT * FROM products WHERE valid=1" AND $category_id=$category;
}
//讀取
$sql_product = "SELECT * FROM products WHERE valid=1";
$result_product = $conn->query($sql_product);

$total_item = $result_product->num_rows;

// 目前在第 x 頁, 共 x頁
//$page=1;
$item_per_page = 10;
$start = ($page - 1) * $item_per_page;

$total_page = floor($total_item / $item_per_page) + 1;
if ($total_item % $item_per_page == 0) $total_page = $total_page - 1;


if($category==0){
$sql = "SELECT products. *, category.name AS category_name FROM products 
JOIN category ON products.category_id = category.id
WHERE products.valid=1 
LIMIT $start, $item_per_page";
}else{
$sql = "SELECT products. *, category.name AS category_name FROM products 
JOIN category ON products.category_id = category.id
WHERE products.valid=1 AND products.category_id=$category 
LIMIT $start, $item_per_page";
}
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

    <style>
        .product_img{
            width:  72px;
            height: 72px;
        }
        .product_img img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: 1px solid #aaaaaa;
        }
    </style>
</head>

<body>
    <div class="container">
        <ul class="nav nav-tabs ">
            <li class="nav-item ">
                <a class="nav-link <?php 
                if($category==0)echo "active";
                ?>" href="product_list.php?page=1&category=0">全部</a>
            </li>
            <?php while ($row = $result_category->fetch_assoc()){?>
            <li class="nav-item">
                <a class="nav-link" href="product_list.php?page=1&category=<?= $row["id"] ?>
                "><?= $row["name"] ?></a>
            </li>
            <?php }?>
        </ul>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered table-sm">
                <div class="text-right"> 目前在第 <?= $page ?> 頁, 共 <?= $total_page ?> 頁 </div>
                <thead>
                    <tr class="text-nowrap">
                        <!-- text-nowrap強制不換行 -->
                        <th>序號</th>
                        <th>分類</th>
                        <th>圖片</th>
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
                            <!-- images/ /不可多空格 -->
                            <td><figure class="product_img"><img src="images/<?= $row["image"] ?>"
                            alt=""></figure></td>
                            <td><?= $row["name"] ?></td>
                            <td><?= $row["price"] ?></td>
                        <tr>
                    <?php  }
                }
                    ?>
            </table>
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <?php for ($i = 1; $i <= $total_page; $i++) { ?>
                        <li class="page-item <?php if ($i == $page) echo "active" ?>"><a class="page-link" href="product_list.php?page=<?= $i ?>&category=<?= $category ?>"><?= $i ?></a></li>
                    <?php } ?>
                </ul>
            </nav>

            </nav>


        </div>
    </div>
</body>

</html>
<?php
$conn->close();
?>