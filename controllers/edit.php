<?php

  $id = $_GET['id'];
if (count($_POST)>0) {
    $app['database']->update('customers', [
      "email='". $_POST['email']."'",
      "n_id='". substr($_POST['n_id'],'0','14')."'",
      "password='" . $_POST['password']."'"
    ],
    $_GET['id']);
    // inserts data into fields
  }
  // make sure it's a get request and gets the id
  // $customers = $app['database']->selectId('customers');

  $customers = $app['database']->selectAll('customers');
  $currentCustomer;
  foreach ($customers as $customer) {
    if ($customer->id == $id){
      $currentCustomer = $customer;
    }
      }


  require 'views/edit.view.php';
 ?>
