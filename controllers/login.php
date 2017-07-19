<?php

if($_POST['login']) {
    if ($userData=$app['database']->login($_POST['email'] ,$_POST['password'])){
        $_SESSION['userData']=$userData;
        header("location:/viewCustomers");
    } else {
        echo 'username or password incorrect!';
    }
}

require 'views/login.view.php';
