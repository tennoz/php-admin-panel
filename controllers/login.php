<?php

if($_POST['login']) {
    if ($userData=$app['database']->login($_POST['email'] ,$_POST['password'])){
        $_SESSION['userData']=$userData;
        header("location:/viewCustomers");
    } else {
        echo 'username or password incorrect!';
    }
}
$_SESSION['userData']=$app['database']->selectLogedUser('customers');

require 'views/login.view.php';
