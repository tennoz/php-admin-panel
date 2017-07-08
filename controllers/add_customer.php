<?php
  $app['database']->insert('customers', [
    'email' => $_POST['email'],
    'n_id' => $_POST['n_id'],
    'password' => $_POST['password']
  ]);

  header('Location: /');
 ?>
