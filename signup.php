<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Đăng ký</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="signup/align.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

      <div class="header">
        <h2>Đăng ký</h2>
        <p>
        <?php 
          if(isset($_SESSION["thongbao"])){
            echo $_SESSION["thongbao"];
            session_unset();
          }
        ?>
        </p>
      </div> 
      <div>
          <form method="POST" action="signup_submit.php">
            <div class="form-group">
              <label>Tên đăng ký</label>
              <input type="text" name="username" placeholder="Tên đăng ký" class="form-control" >
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" placeholder="email" class="form-control">
            </div>
            <div class="form-group">
              <label>Mật khẩu</label>
              <input type="password" name="password" placeholder="Mật khẩu" class="form-control">
            </div>
            <div class="form-group">
              <label>Xác nhận mật khẩu</label>
              <input type="password" name="repassword" placeholder="Xác nhận mật khẩu" class="form-control">
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary">Đăng ký</button>
            </div>
            <p>
              Đã có tài khoản? <a href="login.php">Đăng nhập</a>
            </p>
          </form>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>