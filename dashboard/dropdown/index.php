<?php
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Dependant dropdown</title>
  <meta name="generator" content="Bootply" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet">
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
<body>
  <div class="container">
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <p>Dependant dropdown using Ajax</p>
    <form class="" name="insert" method="post" enctype="multipart/form-data">
      <div class="card col-md-8">
        <div class=" col-md-8">
          <label class="" >Categorie </label>
          <div class="">
            <select name="faculty"  onChange="getSubcat(this.value);"  style="width: 100%; padding: 0.375rem 0.75rem;    border-color: #ced4da;"  >
              <option value="">Selectioonez la categorie</option> 
              <?php $query=mysqli_query($con,"select * from continent");
              while($row=mysqli_fetch_array($query))
              { 
                ?>

                <option value="<?php echo $row['id'];?>"><?php echo $row['ContinentName'];?></option>
                <?php 
              } ?>
            </select>
          </div>
        </div>
        <div class="control-group col-md-8">
          <label class="control-label" for="basicinput">Country</label>
          <div class="controls" >
            <select  style="width: 100%; padding: 0.375rem 0.75rem;    border-color: #ced4da;"   name="course"  id="subcategory"  >
              <option value="">Select</option>
            </select>
          </div>
        </div>
        <div>&nbsp;</div>
      </div>
    </div>
    <!-- Loading Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>