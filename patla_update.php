<?php
include("header.php");
include("db.php");
$id=$_GET["sid"];
$sql="SELECT * FROM patla_master WHERE id=$id";
$run=mysqli_query($con,$sql);
if ($run==true) {
  while ($row=mysqli_fetch_assoc($run)) {
    $id=$row['id'];
    $name=$row['name'];
    $address=$row['address'];
    $mobile1=$row['mobile'];
  }
}
?>
<div class="col-md-12">
  <div class="card">
    <h5 class="card-header">Update patla Details</h5>
    <div class="card-body">
      <form action="patla_update.php" method="post">
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
    <label  class="form-label">Enter Mobile</label>
    <input type="number" class="form-control" value="<?php echo $mobile1; ?>" id="mobile1" name="mobile1" required>
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
  $upd="UPDATE patla_master SET name='$name',address='$address',mobile='$mobile1' WHERE id=$id";
  $r=mysqli_query($con,$upd);
  if ($r==true) {
    ?>
    <script type="text/javascript">
      alert("patla details updated successfully.");
      window.location='patla.php';
    </script>
    <?php
  }else {
    ?>
    <script type="text/javascript">
      alert("year not added");
      window.location='patla.php';
    </script>
    <?php
  }
}


?>
<?php
include("footer.php");
?>
