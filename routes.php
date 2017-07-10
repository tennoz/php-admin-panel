<?php
  $router->get('', 'controllers/index.php');
  $router->get('edit', 'controllers/edit.php');
  $router->get('viewCustomers', 'controllers/customers_table.php');
  $router->get('edit', 'controllers/edit.php');
  $router->post('edit', 'controllers/edit.php');
  $router->post('customers', 'controllers/add_customer.php');
  $router->get('delete', 'controllers/delete_customer.php');
  $router->post('delete', 'controllers/delete_customer.php');
 ?>
