<?php require ('partials/head.php'); ?>


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
      <td><a href="edit?id=<?php echo $customer->id ?>">edit customer</a></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>






<?php require ('partials/footer.php'); ?>
