<?php
include('config.php');
if(!empty($_POST["cat_id"])) 
{
 $id=intval($_POST['cat_id']);
$query=mysqli_query($con,"SELECT * FROM countries WHERE continent_id=$id");
?>
<option value="">Selectionner la sous-categorie</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['country']); ?></option>
  <?php
 }
}
?>