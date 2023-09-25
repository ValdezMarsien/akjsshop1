<?php
include "bd.php";

//$expiry = 900 ;//session expiry required after 15 mins
//    if (isset($_SESSION['LAST']) && (time() - $_SESSION['LAST'] > $expiry)) {
 //       session_unset();
//        session_destroy();
//        header("Location:login.php");
//    }
//    $_SESSION['LAST'] = time();


if (isset($_POST['register'])) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $telephone = $_POST['telephone'];
  $email = $_POST['email'];
  $role = $_POST['role'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];



  $select = "SELECT * FROM utilisateur WHERE nom='$nom' && password='$password'";
  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) > 0)
  {
    $error[] = 'Cet utilisateur existe deja !!!';
  }
  else{
    if($password != $cpassword){
        $error[] = 'Les mots de passe sont differents !!!';
    }else{
        $insert="INSERT INTO utilisateur (id, nom, prenom, telephone, email, role, password) 
        VALUES (NULL,'$nom','$prenom','$telephone','$email','Administrateur','$password')";
        $result = mysqli_query($conn, $insert);
        header('Location: index.php?msg=reussi');
    }
  }
}