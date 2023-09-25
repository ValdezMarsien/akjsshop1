
<?php
   session_start(); 
  include "bd.php";
  $id = $_GET['id'];

  if (isset($_POST['submit'])) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $telephone1 = $_POST['telephone1'];
  $telephone2 = $_POST['telephone2'];
  $email = $_POST['email'];
  $role = $_POST['role'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];


    $sql ="UPDATE `utilisateur` SET `nom`='$nom',`prenom`='$prenom',`telephone1`='$telephone1',`telephone2`='$telephone2',`email`='$email',`role`='$role', `password`='$password' WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if($result){
      header("Location: ../utilisateur.php?msg=Modification reussie ");
    }
    else {
      echo "Echoue " . mysqli_error($conn);
    }
  } 



?>





<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>eBoy</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
   <?php include 'menu.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Article Detail</h1>
                    <form class="user" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nom_article">Article name</label>
                            <input type="text" name="nom_art" value="<?php echo $row['nom_art']; ?>" class="form-control"
                                id="exampleInputEmail" aria-describedby="emailHelp"
                                placeholder="Name of article...">
                            <label for="article_picture">Article Picture</label> 
                            <img src="<?php echo $upload_dir.$row['image_art'] ?>" width="100">
                            <input type="file" name="image_art" class="form-control"
                                id="exampleInputEmail" aria-describedby="emailHelp"
                                placeholder="Enter Email Address...">
                            <label for="price">Price(in euros)</label>    
                            <input type="text" name="prix_art" value="<?php echo $row['prix_art']; ?>" class="form-control"
                                id="exampleInputEmail" aria-describedby="emailHelp"
                                placeholder="Price Article"> 
                            <label for="price">Email of seller</label>      
                            <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control"
                                id="exampleInputEmail" aria-describedby="emailHelp"
                                placeholder="Email of seller">
                            <label for="description">Description</label>      
                            <textarea name="description_art" value="<?php echo $row['description_art']; ?>" class="form-control " id="" cols="30" rows="10"><?php echo $row['description_art']; ?></textarea>
                        </div>
                        <button type="submit"  name="valider" class="btn btn-primary btn-user ">Validate</button>
                        <button type="submit"  name="refus" class="btn btn-success btn-user ">Reject</button>
                        <a href="list_articles.php" class="btn btn-danger btn-user ">Reset</a>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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