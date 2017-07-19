<?php
if($_GET['id']){

  $app['database']->delete('customers',
    $_GET['id']
  );
$_SESSION['message']= 'customer is deleted!';
header("location:/viewCustomers");
}
  $customers = $app['database']->selectAll('customers');

  require 'views/customers_table.view.php';

 ?>
