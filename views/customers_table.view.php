<?php require ('partials/head.php'); ?>
<?php require ('partials/nav.php'); ?>


<?php
if (!$_SESSION['userData']) {
  header("location:/login");
  die;
}
?>
<?php $userData = json_decode(json_encode($_SESSION['userData']), True); ?>
<?php $level = $userData[0][level]; ?>
<?php // var_dump($userData);?>
<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Email</th>
      <th>National ID</th>
    </tr>
  </thead>
  <tbody>



    <?php if ($level == admin): ?>

      <?php foreach ($customers as $customer): ?>
        <tr>
          <th scope="row"><?= $customer->id; ?></th>
          <td><?= $customer->email; ?></td>
          <td><?= $customer->n_id; ?></td>

          <td><?= $userData[0][id]?></td>
          
          <td><a  class="btn btn-info" href="edit?id=<?= $customer->id ?>">edit customer</a></td>
          <td><a  class="btn btn-danger" href="viewCustomers?id=<?= $customer->id ?>">Delete</a></td>
      
        </tr>
      <?php endforeach; ?>

    <?php elseif($level == user): ?>

      
        <tr>
          <th scope="row"><?= $userData[0][id]; ?></th>
          <td><?= $userData[0][email]; ?></td>
          <td><?= $userData[0][n_id]; ?></td>

          <td><?= $userData[0][level]?></td>
          
          <td><a  class="btn btn-info" href="edit?id=<?= $userData[0][id] ?>">edit customer</a></td>
          <td><a  class="btn btn-danger" href="viewCustomers?id=<?= $userData[0][id] ?>">Delete</a></td>
      
        </tr>
     

    <?php endif ?>
  </tbody>
</table>

<?php require ('partials/footer.php'); ?>
