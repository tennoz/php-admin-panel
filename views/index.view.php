<?php require ('partials/head.php'); ?>

<?php foreach ($users as $user) : ?>
    <li><?= $user->names; ?></li>
<?php endforeach; ?>

  <h1>Submit your name</h1>

  <form action="/names" method="POST">

    <input type="text" name="name" value="">
    <button type="submit">Submit</button>
  </form>



<?php require ('partials/footer.php'); ?>
