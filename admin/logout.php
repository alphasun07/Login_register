<?php
    session_start();
    //logout chủ động
    if(isset($_SESSION['login_ok'])){
        unset($_SESSION['login_ok']);
        header('location:../login.php');

    }
?>