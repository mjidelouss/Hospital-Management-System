<?php

session_start();
$_SESSION['signup_error'] = " ---------------";
echo $_SESSION['signup_error'];

var_dump($_SESSION['signup_error']);
require_once('classes/autoloader.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $newuser = new User();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $newuser->login($email, $password);


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Sign in</title>
    <!-- ================== BEGIN core-css ================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="assets/css/default/app.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    <!-- ================== END core-css ================== -->
</head>

<body style="background-color: #eee;">

<section>
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-12 col-xl-9">
                <div class="card text-black" style=" border-radius: 10px; height: 590px;">
                    <div class="card-body p-md-5 h-100">
                        <div class="row justify-content-center">
                            <div class=" col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <h1 class="text-center fw-bold mb-4 mx-1 mx-md-4 mt-4">Welcome Back!</h1>
                                <p class="text-center h6 text-muted mb-5 mx-1 mx-md-4 mt-4"> Login with your details to
                                    continue </p>


                                <form method="post" action="sign_in.php" data-parsley-validate>

                                    <!-- To show errors is user put wrong data -->
                                    <?php if (isset($_SESSION['login_error'])): ?>
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <strong>wrong!</strong>
                                            <?php
                                            echo $_SESSION['login_error'];
                                            unset($_SESSION['login_error']);

                                            ?>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                        </div>
                                    <?php endif ?>
                                    <!-- To show errors is user put wrong data -->
                                    <?php if (isset($_SESSION['signup_result'])): ?>
                                        <div class="alert alert-success alert-dismissible fade show">
                                            <strong>succes!</strong>
                                            <?php
                                            echo $_SESSION['signup_result'];
                                                unset($_SESSION['signup_result']);
                                            ?>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                        </div>
                                    <?php endif ?>

                                    <div class=" mb-4">
                                        <i class="fa fa-address-card fa me-2 fa-fw pt-4"></i>
                                        <label class="form-label fw-bold" for="Logemail ">Email address :</label>
                                        <input type="email" id="Logemail" name="email"
                                               class="form-control form-control"/>
                                    </div>

                                    <div class=" mb-4">
                                        <i class="fas fa-lock fa me-2 fa-fw pt-4"></i>
                                        <label class="form-label fw-bold" for="lpassword">Password :</label>
                                        <input type="password" id="lpassword" name="password"
                                               class="form-control form-control"/>

                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-primary btn btn-block container fluid " type="submit"
                                                name="logIn">Login
                                        </button>
                                    </div>

                                    <p class="text-center">Don't have an account? <a href="./sign_up.php"
                                                                                     class="fw-bold text-black  text-decoration-none">Sign
                                            Up</a></p>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<!-- ================== BEGIN core-js ================== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
<script src="scripts.js"></script>
<!-- ================== END core-js ================== -->
</html>