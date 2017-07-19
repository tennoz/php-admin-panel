<?php require ('partials/head.php'); ?>
<?php
if (!$_SESSION) {
  header("location:/login");
}
if($_SESSION['message']){
  echo $_SESSION['message'];
  $_SESSION['message']='';
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
      <td><a  class="btn btn-info" href="edit?id=<?php echo $customer->id ?>">edit customer</a></td>
      <td><a  class="btn btn-danger" href="viewCustomers?id=<?php echo $customer->id ?>">Delete</a></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<?php require ('partials/footer.php'); ?>
