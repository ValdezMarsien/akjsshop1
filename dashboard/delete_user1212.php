<?php
include 'bd.php';

$id= $_GET['id'];
$sql = "DELETE FROM `utilisateur` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: list_user.php?msg=Success"); 
}
else {
    echo "Echoue " .mysqli_error($conn); 
}

?>