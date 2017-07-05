<?php
  $app['database']->insert('customers', [
    'email' => $_POST['email'],
    'n_id' => $_POST['Id'],
    'password' => $_POST['password']
  ]);

  header('Location: /');
 ?>
