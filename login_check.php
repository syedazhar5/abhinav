<?php

if ($_POST) {
    include_once('connect.php');
    $conn = getConnection();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `login` WHERE `username` = '$username'";

    $result = $conn->query($sql);
    if($result->num_rows <= 0){
        echo "User not Exist";
    }else{
        $userdata = $result->fetch_assoc();
        if($userdata['password'] == $password){
            echo 'login success';
        }else{
            echo 'password Wrong';
        }
    }
} else {
    echo 'get';
}
