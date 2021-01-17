<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Đăng nhập</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="signin/styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="header">
        <h2>Đăng nhập</h2>
        <p>
          <?php 
            if(isset($_SESSION["thongbao"])){
              echo $_SESSION["thongbao"];
              session_unset();
            }
          ?>
        </p>
        
      </div>
      <form method="POST" action="login_submit.php">
      <div class="form-group">
          <label>Tên đăng nhập</label>
          <input type="text" name="username" placeholder="Tên đăng nhập" class="form-control">
        </div>
        <div class="form-group">
          <label>Mật khẩu</label>
          <input type="password" name="password" placeholder="password" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary">Đăng nhập</button>
        </div>
        <p>
              Chưa có tài khoản? <a href="signup.php">Đăng ký</a>
        </p>
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>