<?php

    unset($_SESSION["userData"]); 
    session_destroy();
    header("location:/login");
    exit();
 ?>