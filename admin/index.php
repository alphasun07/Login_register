
<?php
//tạo 1 cửa để bảo vệ
//NHỮNG TRANG NÀO CÓ QUẢN TRỊ > ĐẶT ĐOẠN MÃ NÀY Ở ĐẦU
    session_start(); //dvu bảo vệ

    //ktra thẻ bài
    if(!isset($_SESSION['login_ok'])){
        header("Location:.../login.php");

    }

//thẻ bài cấp đc xác thục thnshf công
//môi thẻ = 24' = phiên làm vc
//nếu k làm gì: thu hồi thẻ bài > hủy phiên tuự dộng
//hủy phiên: đóng trình duyệt hoặc nhán logout
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <header>
          <?php
            echo "Welcome".$_SESSION['login_ok'];
            echo "<a href='logout.php'>Logout</a>";
          ?>
    </header>
    <h1>Hello Admin </h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>