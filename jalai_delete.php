<?php
include("db.php");
$id=$_GET["sid"];
$sql="DELETE FROM jalai_master WHERE id=$id";
$run=mysqli_query($con,$sql);
if ($run==true) {
  ?>
  <script type="text/javascript">
    alert("deleted successfully.");
    window.location='jalai_majdur.php';
  </script>
  <?php
}else {
  ?>
  <script type="text/javascript">
    alert("something went wrong");
    window.location='jalai_majdur.php';
  </script>
  <?php
}
?>
