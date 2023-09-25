<?php
session_start();
include "bd.php";

if(isset($_POST['email']) && isset($_POST['password']))
{

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);
    $role = test_input($_POST['role']);
  
    if(empty($email)) 
    {
        header("Location: index.php?error=Nom d'utilisateur ou Mot de passe incorrect");
    } 
    else if(empty($password))
    {
     header("Location: index.php?error=Nom d'utilisateur ou Mot de passe incorrect"); 
    }
    else
    {
        $sql = "SELECT * FROM utilisateur WHERE email='$email' AND password='$password' ";
        $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
               if($row['password'] === $password )
               {
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['nom'] = $row['nom'];
                
                header("Location:index.php");
               }
               else{
                header("Location: index.php?error=Nom d'utilisateur ou Mot de passe incorrect");
               }
            }
            else{
                header("Location: index.php?error=Nom d'utilisateur ou Mot de passe incorrect");
            }
    }    

}
else{
    header("Location:index.php");
}


