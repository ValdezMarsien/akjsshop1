<?php 
session_start();
include 'bd.php';

if(isset($_POST['article']))
{
    $nom_art = $_POST['nom_art'];
    $image_art = $_FILES['image_art']['name'];
    $prix_art = $_POST['prix_art'];
    $description_art = $_POST['description_art'];
    $categories = $_POST['categories'];
    $sous_categories = $_POST['sous_categories'];

    if(file_exists("upload/" . $_FILES["image_art"]["name"]))
    {
      $store = $_FILES["image_art"]["name"];
      $_SESSION['statut'] = "L'image existe deja. '.$store.'";
      header('Location: add_articles.php');

    }else{
      $sql ="INSERT INTO `articles`(`id_art`, `nom_art`, `image_art`, `prix_art`, `description_art`,`categories`,`sous_categories`) VALUES (NULL,'$nom_art','$image_art','$prix_art','$description_art','$categories','$sous_categories')";
      $result = mysqli_query($conn, $sql);
      if($result){
          move_uploaded_file($_FILES["image_art"]["tmp_name"],"upload/".$_FILES["image_art"]["name"]);
          $_SESSION['success'] = "success";
          header("Location: add_articles.php?msg=Successful registration");
        }
        else {
          $_SESSION['success'] = "Non";
          echo "Echoue " . mysqli_error($conn);
        }

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

    <title>AKJ'S SHOP</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script>
    function getSubcat(val) {
      $.ajax({
        type: "POST",
        url: "get_subcat.php",
        data:'cat_id='+val,
        success: function(data){
          $("#subcategory").html(data);
        }
      });
    }
    function selectCountry(val) {
      $("#search-box").val(val);
      $("#suggesstion-box").hide();
    }
  </script> 

</head>

<body id="page-top">

<?php include 'menu.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
             
                    <h1 class="h3 mb-4 text-gray-800">Add article</h1>
                    <?php
                        if (isset($_GET['msg'])) {
                            $msg = $_GET['msg'];
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            '.$msg.'
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                            }
                    ?>

                    <form class="user" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nom_article">Article name</label>
                            <input type="text" name="nom_art" class="form-control"
                                id="exampleInputEmail" aria-describedby=""
                                placeholder="Name of article...">

                            <label for="categorie">Article Category</label>    
                            <select name="categories" class="form-control" onChange="getSubcat(this.value);"  style="width: 100%; padding: 0.375rem 0.75rem;    border-color: #ced4da;"  >
                                <option value="">Selectioonez la categorie</option> 
                                <?php $query=mysqli_query($conn,"select * from continent");
                                while($row=mysqli_fetch_array($query))
                                { 
                                    ?>

                                    <option value="<?php echo $row['id'];?>"><?php echo $row['ContinentName'];?></option>
                                    <?php 
                                } ?>
                            </select>

                            <label class="" for="basicinput">Sous-categorie</label>
                            <select class="form-control" style="width: 100%; padding: 0.375rem 0.75rem;    border-color: #ced4da;"   name="sous_categories"  id="subcategory"  >
                                <option value="">Selectionner la sous-categorie</option>
                            </select>


                            <label for="article_picture">Article Picture</label> 
                            <input type="file" name="image_art" class="form-control"
                                id="" aria-describedby="emailHelp"
                                placeholder="Enter Email Address...">
                            <label for="price">Price(in euros)</label>
                            <input type="text" name="prix_art" class="form-control"
                                id="" aria-describedby="emailHelp"
                                placeholder="Price Article"> 
                            <label for="description">Description</label>   
                            <textarea name="description_art" class="form-control " id="" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" name="article" class="btn btn-primary btn-user "> Validate</button>

                        <a class="btn btn-danger btn-user ">
                            Reset
                        </a>
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
    <script src="js/jquery.min.js"></script>

</body>

</html>