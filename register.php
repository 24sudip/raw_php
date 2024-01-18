<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login-demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .pass {
    position: relative;
    }
    a {
        width: 38px;
        height: 38px;
        background-color: teal;
        color: #fff;
        font-size: 20px;
        text-align: center;
        line-height: 40px;
        position: absolute;
        top: 31px;
        right: 0;
        border-radius: 0 5px 5px 0;
    }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-header bg-success">
                        <h3 class="text-white">Register User</h3>
                    </div>
                    <div class="card-body">
                    <form action="register_post.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="user_name">
                            <?php if (isset($_SESSION['name_err'])) { ?>
                                <strong class="text-danger"><?= $_SESSION['name_err'] ?></strong>
                            <?php } unset($_SESSION['name_err']); ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email">
                            <?php if (isset($_SESSION['email_err'])) { ?>
                                <strong class="text-danger"><?= $_SESSION['email_err'] ?></strong>
                            <?php } unset($_SESSION['email_err']); ?>
                        </div>
                        <div class="mb-3 pass">
                            <label class="form-label">Password</label>
                            <input type="password" id="pass_input" name="password">
                            <?php if (isset($_SESSION['password_err'])) { ?>
                                <strong class="text-danger"><?= $_SESSION['password_err'] ?></strong>
                            <?php } unset($_SESSION['password_err']); ?>
                            <i class="fa fa-eye show_pass"></i>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">DOB</label>
                            <input type="date" name="dob">
                            <?php if (isset($_SESSION['dob_err'])) { ?>
                                <strong class="text-danger"><?= $_SESSION['dob_err'] ?></strong>
                            <?php } unset($_SESSION['dob_err']); ?>
                        </div>
                        <div class="mb-3">
                            <select name="country">
                                <option value="">Select Country</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Spain">Spain</option>
                                <option value="England">England</option>
                            </select>
                            <?php if (isset($_SESSION['country_err'])) { ?>
                                <strong class="text-danger"><?= $_SESSION['country_err'] ?></strong>
                            <?php } unset($_SESSION['country_err']); ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        $('.show_pass').click(function () {
            var pass_field = document.getElementById("pass_input");
            if (pass_field.type === "password") {
                pass_field.type = "text";
            } else {
                pass_field.type = "password";
            }
        });
    </script>
  </body>
</html>
