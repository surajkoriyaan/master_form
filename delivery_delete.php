<?php
include("db.php");
$id=$_GET["sid"];
$sql="DELETE FROM devilvery_ WHERE id=$id";
$run=mysqli_query($con,$sql);
if ($run==true) {
  ?>
  <script type="text/javascript">
    alert("deleted successfully.");
    window.location='delivery_site.php';
  </script>
  <?php
}else {
  ?>
  <script type="text/javascript">
    alert("something went wrong");
    window.location='delivery_site.php';
  </script>
  <?php
}
?>
