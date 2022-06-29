<?php
session_start();
include '../constant/cons.php';
$messeges = array();
$error = false;
$text = '';
$user_info = [];
$flag = false;

var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST)) {

        if (!isset($_POST['userName'])) {
            $messeges['data_not_valid'] = 'username empty';
            $error = true;
        }
        if (!isset($_POST['email'])) {
            $messeges['data_not_valid'] = 'email empty';
            $error = true;
        }
        if (!isset($_POST['password'])) {
            $messeges['data_not_valid'] = 'password empty';
            $error = true;
        }
       
        foreach (USERS as  $user) {
            if ($_POST['userName'] == $user['username'] && $_POST['password'] == $user['password'] && $_POST['email']==$user['email'] ) {
                $user_info = $user;
                $flag = true;
                break;

            }
        }
        if (!$flag) {
            $messeges['request_not_valid'] = 'dosen\'t mache';
            $error = true;
        }
    } else {
        $messeges['request_not_valid'] = 'wrong request';
        $error = true;
    }
}
else{
    $messeges['request_not_valid'] = 'wrong request';
    $error = true;
}




if (!$error) {

    $_SESSION['user'] = $user_info;
    header("Location: ".BASE_URL.'home.php');

} else {
    $_SESSION['login_error'] = $messeges;
     header("Location: ".$_SERVER['HTTP_REFERER']);
}
