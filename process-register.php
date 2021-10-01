<?php
    // echo '<pre>';
    // echo print_r($_POST);
    // echo'</pre>';

    //nhận gtri tu form register gửi sang
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

        //ktra pass1==pass2 -> js
    //quy trình bước

    //b1: két nối server
    include ('config/db.php');

    //b2: thực hiện truy vấn
    //2.1 ktra đã tồn tại chưa
        $sql_1 = "SELECT *From users WHERE email = '$email'";
        $result_1 = mysqli_query($conn,$sql_1);

        if(mysqli_num_rows($result_1)>0){
            //chuyển hướng trang
            $value = 'existed';
            header("Location: register.php?response=$value");
            
        }
        else{
            //2.2 nếu chưa ồn tại thì ms lưu
            //băm pass
            $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
            $sql_2 = "INSERT INTO users(first_name, last_name, email, password) VALUES('$first_name','$last_name','$email','$pass_hash')";
            $result_2 = mysqli_query($conn,$sql_2); //vì thực hiện insert: kq trẩ về của result_2 là số bản ghi thành công(số nguyên)

            if($result_2 > 0){
                $value = 'successfully';
                header("Location: register.php?response=$value");
            }
        }

?>