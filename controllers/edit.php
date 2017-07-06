<?php

  $id = $_GET['id'];

  $customers = $app['database']->selectAll('customers');
  $currentCustomer;
  foreach ($customers as $customer) {
    if ($customer->id == $id){
      $currentCustomer = $customer;
    }
      }


  if (count($_POST)>0) {
    $app['database']->update('customers', [
      'email' => $_POST['email'],
      'n_id' => $_POST['Id'],
      'password' => $_POST['password']
    ]);
  }



  require 'views/edit.view.php';
 ?>
