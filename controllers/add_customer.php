<?php
  $app['database']->insert('customer', [
    'email' => $_POST['email'],
    'n-id' => $_POST['Id'],
    'password' => $_POST['password']
  ]);

  header('Location: /');
 ?>
