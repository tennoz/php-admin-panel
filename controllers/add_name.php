<?php
  $app['database']->insert('users', [
    'names' => $_POST['name']
  ]);

  header('Location: /');
 ?>
