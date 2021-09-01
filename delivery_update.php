<?php
include("header.php");
include("db.php");
error_reporting(0);
$id=$_GET["sid"];
$sql="SELECT * FROM devilvery_ WHERE id=$id";
$run=mysqli_query($con,$sql);
if ($run==true) {
  while ($row=mysqli_fetch_assoc($run)) {
    $id=$row['id'];
    $address=$row['name'];
  }
}
?>
<div class="col-md-12">
  <div class="card">
    <h5 class="card-header">Update delivery address</h5>
    <div class="card-body">
      <form action="delivery_update.php" method="post">
  <div class="mb-3">
    <label  class="form-label">Enter address</label>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="text" class="form-control" value="<?php echo $address; ?>" id="address" name="address" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </div>
</div>
<?php
if (isset($_POST['submit'])) {
  $id=$_POST['id'];
  $address=$_POST['address'];
  $upd="UPDATE devilvery_ SET name='$address' WHERE id=$id";
  $r=mysqli_query($con,$upd);
  if ($r==true) {
    ?>
    <script type="text/javascript">
      alert("address updated successfully.");
      window.location='delivery_site.php';
    </script>
    <?php
  }else {
    ?>
    <script type="text/javascript">
      alert("address not added");
      window.location='delivery_site.php';
    </script>
    <?php
  }
}


?>
<?php
include("footer.php");
?>
