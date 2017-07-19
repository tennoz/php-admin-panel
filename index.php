<?php
ob_start();
session_start();
require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
