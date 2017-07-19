<?php require ('partials/head.php'); ?>

<link rel="stylesheet" href="style.css">
<center>
    <div class="login-form">
        <div class="top-part">
            <h2>Login Form</h2>
        </div>
        <div class="form-body">
            <form action="/login" method="POST">

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <a href="register">
                    <input name="register" class="btn btn-success" value="Register">
                </a>
                <input type="submit" name="login" class="btn btn-primary" value="Submit">

            </form>
        </div>
        <div class="login-footing-text">
            <p><b>username: </b>ahmad@gmail.com</p>
            <p><b>password: </b>12345678</p>
        </div>
    </div>
</center>


<?php require ('partials/footer.php'); ?>