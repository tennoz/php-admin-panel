<?php

  $id = $_GET['id'];

  // make sure it's a get request and gets the id
  $customers = $app['database']->selectAll('customers');
  $currentCustomer;
  foreach ($customers as $customer) {
    if ($customer->id == $id){
      $currentCustomer = $customer;
    }
      }
      // grabs id and sets customer's information into currentCustomer

  if (count($_POST)>0) {
    // array.length
    $app['database']->update('customers', [
      'id'=>$_POST['id'],
      'email' => $_POST['email'],
      'n_id' => $_POST['n_id'],
      'password' => $_POST['password']
    ]);
    // inserts data into fields
  }



  require 'views/edit.view.php';
 ?>
