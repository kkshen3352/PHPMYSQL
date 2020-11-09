<!doctype html>
<html lang="en">

<head>
    <title>Post From</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="post_target.php" method="post">
                    <div class="form-group">
                        <label for="">姓名</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="">生日</label>
                        <input type="date" class="form-control" name="birthday" required>
                    </div>
                    <div class="form-group">
                        <label for="">電話</label>
                        <input type="tel" class="form-control" name="phone[]" >
                        <input type="tel" class="form-control" name="phone[]" >
                        <input type="tel" class="form-control" name="phone[]" >
                    </div>
                    <div class="form-group">
                        <label for="">性別</label>
                        <input type="radio" name="gender" value="男性"><label for="">男性</label>
                        <input type="radio" name="gender"  value="女性"><label for="">女性</label>
                    </div>
                    <div class="form-group">
                        <label for="">電信業者</label>
                        <select class="from-control" name="telecom" id="">
                            <option value="種花">種花</option>
                            <option value="胎歌">胎歌</option>
                            <option value="猿傳">猿傳</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="newsletter" value="我願意接收電子報"><label for="">我願意接收電子報</label>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-info" type="submit" value="送出">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>