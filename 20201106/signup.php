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
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <h3 class="text-center">註冊</h3>
                <!-- 寫入註冊 -->
                <form action="do_sign.php" method="post">
                    <div class="form-froup">
                        <label for="">帳號</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-froup">
                        <label for="">密碼</label>
                        <input type="text" class="form-control" name="password" required>
                    </div>
                    <div class="form-froup">
                        <label for="">再輸入一次密碼</label>
                        <input type="text" class="form-control" name="repassword" required>
                    </div>
                    <div class="form-froup">
                        <input type="submit" class="btn btn-info" value="送出">
                    </div>
                </form>
            </div>
        </div>
    </div>

  </body>
</html>