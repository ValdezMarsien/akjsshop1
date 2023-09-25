<?php
    include 'bd.php';

$id_art= $_GET['id_art'];
$sql = "DELETE FROM `articles` WHERE id_art = $id_art";

$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: list_articles.php?msg=Success"); 
}
else {
    echo "Echoue " .mysqli_error($conn); 
}

?>