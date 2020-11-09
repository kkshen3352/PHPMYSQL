<?php
require_once("db_connect.php");
$sql="SELECT * FROM users";
$result=$conn->query($sql);
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
        <table class="table table_bordered table-sm">
            <thead>
                <tr>
                    <th>學號</th>
                    <th>姓名</th>
                    <th>身高(cm)</th>
                    <th>體重(kg)</th>
                    <th>email</th>
                    <th>phone</th>
                </tr>
            </thead>
            <?php
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row["id"]." </td>";
                    echo "<td>".$row["name"]." </td>";
                    echo "<td>".$row["height"]." </td>";
                    echo "<td>".$row["weight"]." </td>";
                    echo "<td>".$row["email"]." </td>";
                    echo "<td>".$row["phone"]." </td>";
                    echo "<tr>";
                }
            }
            ?>
            
            <tbody>
    
            </tbody>
        </table>




    </div>
</body>

</html>
<?php
$conn->close();
?>