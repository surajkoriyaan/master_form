<?php
include("header.php");
include("db.php");
error_reporting(0);
$id=$_GET["sid"];
$sql="SELECT * FROM carting_master WHERE id=$id";
$run=mysqli_query($con,$sql);
if ($run==true) {
  while ($row=mysqli_fetch_assoc($run)) {
    $id=$row['id'];
    $num=$row['num'];
    $address=$row['address'];
    $amount=$row['amount'];
  }
}
?>
<div class="col-md-12">
  <div class="card">
    <h5 class="card-header">Update carting Details</h5>
    <div class="card-body">
      <form action="carting_update.php" method="post">
  <div class="mb-3">
    <label  class="form-label">vehicle number</label>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="text" class="form-control" value="<?php echo $num; ?>" id="name" name="name" required>
  </div>
  <div class="mb-3">
    <label  class="form-label">delivery site</label>
<textarea name="address" class="form-control" rows="2" cols="2" required>
<?php echo $address; ?>
</textarea>
  </div>
  <div class="mb-3">
    <label  class="form-label">amount</label>
    <input type="number" class="form-control" value="<?php echo $amount; ?>" id="mobile1" name="mobile1" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </div>
</div>
<?php
if (isset($_POST['submit'])) {
  $id=$_POST['id'];
  $name=$_POST['name'];
  $address=$_POST['address'];
  $mobile1=$_POST['mobile1'];
  $upd="UPDATE carting_master SET num='$name',address='$address',amount='$mobile1' WHERE id=$id";
  $r=mysqli_query($con,$upd);
  if ($r==true) {
    ?>
    <script type="text/javascript">
      alert("carting details updated successfully.");
      window.location='carting_master.php';
    </script>
    <?php
  }else {
    ?>
    <script type="text/javascript">
      alert("carting not added");
      window.location='carting_master.php';
    </script>
    <?php
  }
}


?>
<?php
include("footer.php");
?>
