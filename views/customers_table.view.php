<?php require ('partials/head.php'); ?>
<?php require ('partials/nav.php'); ?>


<?php
if (!$_SESSION['userData']) {
  header("location:/login");
  die;
}
?>

<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Email</th>
      <th>National ID</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($customers as $customer) : ?>
    <tr>
      <th scope="row"><?= $customer->id; ?></th>
      <td><?= $customer->email; ?></td>
      <td><?= $customer->n_id; ?></td>
      <?php if($_SESSION['userData']->level == 'admin')  {
      echo '<td><a  class="btn btn-info" href="edit?id=<?php echo $customer->id ?>">edit customer</a></td>
      <td><a  class="btn btn-danger" href="viewCustomers?id=<?php echo $customer->id ?>">Delete</a></td>';
      } else {
        echo '<td><a  class="btn btn-info" href="edit?id=<?php echo $user->id ?>">edit customer</a></td>
      <td><a  class="btn btn-danger" href="viewCustomers?id=<?php echo $user->id ?>">Delete</a></td>';
      }
    ?>
      
    
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<?php require ('partials/footer.php'); ?>
