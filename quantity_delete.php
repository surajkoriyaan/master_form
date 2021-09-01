<?php
include('db.php');
$id=$_GET['sid'];
$sql="DELETE FROM quantity_master WHERE id=$id";
$run=mysqli_query($con,$sql);
if ($run==true) {
  ?>
  <script type="text/javascript">
    alert('data deleted successfully');
    window.location='quantity_view.php';
  </script>
  <?php
}else {
  ?>
  <script type="text/javascript">
    alert('data not deleted successfully');
    window.location='quantity_view.php';
  </script>
  <?php
}
?>
