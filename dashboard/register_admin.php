<?php include 'bd.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg-12">
                        

                        <div class="p-5">
                            <div class="text-center">
                                <img src="AKJ2.png" alt="" srcset="" style=" position: relative; width: 203px; height: 93px; margin-top: -45px;"><br>
                                <h1 class="h4 text-gray-900 mb-4">Creer un compte Administrateur</h1>
                            </div>
                            <form class="user" method="post" action="register-code.php">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="nom" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nom" require>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="prenom" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Prenom" require>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Addresse Email" require>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="telephone" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Telephone 1" require>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="telephone2" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Telephone 2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" require>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="cpassword" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" require>
                                    </div>
                                </div>
                                <input  type="submit" name="register" class="btn btn-primary btn-user btn-block" value="Register" class="btn mb-3" value="Enregistrer">
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login-admin.php">Vous avez deja un compte? Se connecter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>