<?php
include("header.php");
include("db.php");
error_reporting(0);
$id=$_GET["sid"];
$sql="SELECT * FROM mehtaji_master WHERE id=$id";
$run=mysqli_query($con,$sql);
if ($run==true) {
  while ($row=mysqli_fetch_assoc($run)) {
    $id=$row['id'];
    $name=$row['name'];
    $address=$row['address'];
    $mobile1=$row['mobile1'];
    $mobile2=$row['mobile2'];
  }
}
?>
<div class="col-md-12">
  <div class="card">
    <h5 class="card-header">Update Mehtaji Details</h5>
    <div class="card-body">
      <form action="mehtaji_update.php" method="post">
  <div class="mb-3">
    <label  class="form-label">Enter Name</label>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="text" class="form-control" value="<?php echo $name; ?>" id="name" name="name" required>
  </div>
  <div class="mb-3">
    <label  class="form-label">Enter Address</label>
<textarea name="address" class="form-control" rows="2" cols="2" required>
<?php echo $address; ?>
</textarea>
  </div>
  <div class="mb-3">
    <label  class="form-label">Enter Mobile1</label>
    <input type="number" class="form-control" value="<?php echo $mobile1; ?>" id="mobile1" name="mobile1" required>
  </div>
  <div class="mb-3">
    <label  class="form-label">Enter Mobile2</label>
    <input type="number" class="form-control" value="<?php echo $mobile2; ?>" id="mobile2" name="mobile2" required>
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
  $mobile2=$_POST['mobile2'];
  $upd="UPDATE mehtaji_master SET name='$name',address='$address',mobile1='$mobile1',mobile2='$mobile2' WHERE id=$id";
  $r=mysqli_query($con,$upd);
  if ($r==true) {
    ?>
    <script type="text/javascript">
      alert("mehtaji details updated successfully.");
      window.location='mahtaji.php';
    </script>
    <?php
  }else {
    ?>
    <script type="text/javascript">
      alert("year not added");
      window.location='mahtaji.php';
    </script>
    <?php
  }
}


?>
<?php
include("footer.php");
?>
