<?php
//   $app['database']->delete('customers', [
//     'email' => $_POST['email'],
//     'n_id' => $_POST['n_id'],
//     'password' => $_POST['password']
//   ],
//   $_GET['id']
// );

if (isset($_POST['delete'])) {

  $sql = sprintf(
      'DELETE FROM %s WHERE %s.id = %s',
      $table,
      $table,
      $id
  );

  try {
      $statement = $this->pdo->prepare($sql);

      $statement->execute($parameters);
  } catch (Exception $e) {
      die($e->getMessage());
  }

} else {
    echo 'no buttons pressed.';
}
 ?>
