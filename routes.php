<?php
  $router->get('', 'controllers/index.php');
  $router->get('login', 'controllers/login.php');
  $router->post('login', 'controllers/login.php');
  $router->get('register', 'controllers/register.php');
  $router->post('customers', 'controllers/add_customer.php');
  $router->get('viewCustomers', 'controllers/customers_table.php');
  $router->get('edit', 'controllers/edit.php');
  $router->post('edit', 'controllers/edit.php');
  $router->get('logout', 'controllers/logout.php');

 ?>
