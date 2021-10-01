<?php
    // echo '<pre>';
    // echo print_r($_POST);
    // echo'</pre>';

    //nhận gtri tu form register gửi sang

    $email = $_POST['email'];
    $pass = $_POST['pass'];


        //ktra pass1==pass2 -> js
    //quy trình bước

    //b1: két nối server
    include ('config/db.php');

    //b2: thực hiện truy vấn
    //2.1 ktra đã tồn tại chưa
        $sql_1 = "SELECT *From users WHERE email = '$email'";
        $result_1 = mysqli_query($conn,$sql_1);

        if(mysqli_num_rows($result_1)>0){
           $row= mysqli_fetch_assoc($result_1);
           $pass_saved = $row ['password'];

           if(password_verify($pass, $pass_saved)){
               //nếu khớp thì > login thành công > chuyenr vào trang index

               //cấp thẻ bài
               $_SESSION['login_ok'] = $email;
               header("Location: admin/index.php");

           }
            
           else{
               $response = 'failed_password';
               header("Location:login.php?response=$response");

           }
        }
        else{
            $response = 'failed_email';
            header("Location:login.php?response=$response");

        }


?>