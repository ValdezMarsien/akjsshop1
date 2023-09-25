
<?php
  session_start();
  require_once('bd.php');
  $upload_dir = 'upload/';
  $id_art = $_GET['id_art'];

  if (isset($_GET['id_art'])) {
    $id_art = $_GET['id_art'];
    $sql = "select * from articles where id_art=".$id_art;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }else {
      $errorMsg = 'Could not Find Any Record';
    }
  }

if(isset($_POST['valider'])){

        $nom_art = $_POST['nom_art'];
        $image_art = $_FILES['image_art']['name'];
        $prix_art = $_POST['prix_art'];
        $description_art = $_POST['description_art'];
        $email = $_POST['email'];
        $categories = $_POST['categories'];

		$imgName = $_FILES['image_art']['name'];
		$imgTmp = $_FILES['image_art']['tmp_name'];
		$imgSize = $_FILES['image_art']['size'];

		if($imgName){

			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

				if($imgSize < 5000000){
					unlink($upload_dir.$row['image_art']);
					move_uploaded_file($imgTmp ,$upload_dir.$userPic);
				}else{
					$errorMsg = 'Image too large';
				}
			}else{
				$errorMsg = 'Please select a valid image';
			}
		}else{

			$userPic = $row['image_art'];
		}

		if(!isset($errorMsg)){
            $sql ="UPDATE `articles` SET `nom_art`='$nom_art',`image_art`='".$userPic."',`prix_art`='$prix_art',`description_art`='$description_art',`email`='$email' WHERE id_art = $id_art";
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record updated successfully';
				header('Location:index.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
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
        url: "get_subcat1.php",
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

    <!-- Page Wrapper -->
   <?php include 'menu.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Article Detail</h1>
                    
                <?php
                    $sql = "SELECT * FROM `articles` WHERE id_art = $id_art LIMIT 1";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_assoc($result); 
                ?>
                    <form class="user" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nom_article">Article name</label>
                            <input type="text" name="nom_art" value="<?php echo $row['nom_art']; ?>" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Name of article...">
                            
                            <label for="categorie">Article Category</label>    
                            <select name="categories" class="form-control" onChange="getSubcat(this.value);"  style="width: 100%; padding: 0.375rem 0.75rem;    border-color: #ced4da;"  >
                            


                                
                                <?php $query=mysqli_query($conn,"select ContinentName, id from continent inner JOIN articles ON continent.id = articles.categories where id_art = $id_art union SELECT ContinentName,id FROM continent;  ");
                                while($rows=mysqli_fetch_array($query))
                                { 
                                    ?>
                                    <option value="<?php echo $rows ['id'];?>"><?php echo $rows ['ContinentName'];?></option>
                                    <?php 
                                } ?>
                            </select>
                            <label class="" for="basicinput">Sous-categorie</label>

                            <select class="form-control" style="width: 100%; padding: 0.375rem 0.75rem;    border-color: #ced4da;"   name="sous_categories"  id="subcategory"  >
                            <?php $query=mysqli_query($conn," SELECT sous_categories from articles where id_art = $id_art"); while($rows=mysqli_fetch_array($query)){?>
                            <option value="<?php echo htmlentities($rows['sous_categories']); ?>"><?php echo htmlentities($rows['sous_categories']); ?></option>
                            <?php } ?>
                                
                            </select>

                            <label for="article_picture">Article Picture</label> 
                            <img src="<?php echo $upload_dir.$row['image_art'] ?>" width="100">
                            <input type="file" name="image_art" class="form-control"
                                id="exampleInputEmail" aria-describedby="emailHelp"
                                placeholder="Enter Email Address...">
                            <label for="price">Price(in euros)</label>    
                            <input type="text" name="prix_art" value="<?php echo $row['prix_art']; ?>" class="form-control"
                                id="exampleInputEmail" aria-describedby="emailHelp"
                                placeholder="Price Article"> 
                            <label for="price">Your Email</label>      
                            <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control"
                                id="exampleInputEmail" aria-describedby="emailHelp"
                                placeholder="Your Email"> 
                            <label for="description">Description</label>      
                            <textarea name="description_art" value="<?php echo $row['description_art']; ?>" class="form-control " id="" cols="30" rows="10"><?php echo $row['description_art']; ?></textarea>
                        </div>
                        <button type="submit"  name="valider" class="btn btn-primary btn-user "> Valider</button>
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