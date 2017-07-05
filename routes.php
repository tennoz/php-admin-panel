<?php
  $router->get('', 'controllers/index.php');
  $router->get('about', 'controllers/about.php');
  $router->get('culture', 'controllers/culture.php');
  $router->get('contact', 'controllers/contact.php');
  $router->post('names', 'controllers/add_name.php');
 ?>
