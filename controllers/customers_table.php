<?php

  $customers = $app['database']->selectAll('customers');

  require 'views/customers_table.view.php';

 ?>
