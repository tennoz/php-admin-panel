<?php
  $app['database']->delete('customers', [
    'email' => $_POST['email'],
    'n_id' => $_POST['n_id'],
    'password' => $_POST['password']
  ]
  $_GET['id']
);

  header('Location: /');
 ?>
