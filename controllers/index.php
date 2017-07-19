<?php
if ($_SESSION['userData']){
    header("location:/viewCustomers");
} else {
    header("location:/login");
}
