<?php
ob_start();
session_start();
if ($_POST) {
    include_once('connect.php');
    $conn = getConnection();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `login` WHERE `username` = '$username'";

    $result = $conn->query($sql);
    if($result->num_rows <= 0){
        header('location:login.php?msg='.urlencode("User not Exist"));
    }else{
        $userdata = $result->fetch_assoc();
        if($userdata['password'] == $password){
            $_SESSION['is_loggedin'] = true;
            header('location:dashboard.php');
        }else{
            header('location:login.php?msg='.urlencode("password Wrong"));
        }
    }
} else {
    echo 'get';
}
