<?php require ('partials/head.php'); ?>

<form action="" method="POST">

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?= $currentCustomer->email; ?>">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputId"></label>
    <input type="text" class="form-control" id="exampleInputId" aria-describedby="IdHelp" placeholder="National ID" name="n_id" value="<?= $currentCustomer->n_id; ?>">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="<?= $currentCustomer->password; ?>">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>


<?php require ('partials/footer.php'); ?>
