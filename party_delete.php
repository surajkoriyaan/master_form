<?php
include("db.php");
$id=$_GET["sid"];
$sql="DELETE FROM party_master WHERE id=$id";
$run=mysqli_query($con,$sql);
if ($run==true) {
  ?>
  <script type="text/javascript">
    alert("deleted successfully.");
    window.location='party_master.php';
  </script>
  <?php
}else {
  ?>
  <script type="text/javascript">
    alert("something went wrong");
    window.location='party_master.php';
  </script>
  <?php
}
?>
