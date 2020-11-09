<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <form action="get_data.php" method="get">
        <div>
            <label for="">姓名: </label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="">密碼: </label>
            <input type="psw" name="password" required>
        </div>
        <div>
            <label for="">年齡: </label>
            <input type="number" name="age" required>
        </div>
        
        <input type="submit" value="送出">
    </form>
</body>

</html>