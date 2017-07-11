<?php
  $app['database']->delete('customers',
    $_GET['id']
  );
echo 'customer is deleted!';



 ?>
