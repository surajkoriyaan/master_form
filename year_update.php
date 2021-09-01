<?php
include("header.php");
include("db.php");
$id=$_GET["sid"];
$sql="SELECT * FROM year_master WHERE id=$id";
$run=mysqli_query($con,$sql);
if ($run==true) {
  while ($row=mysqli_fetch_assoc($run)) {
    $id=$row['id'];
    $year=$row['year'];
  }
}
?>
<div class="col-md-12">
  <div class="card">
    <h5 class="card-header">Update Year</h5>
    <div class="card-body">
      <form action="year_update.php" method="post">
  <div class="mb-3">
    <label  class="form-label">Enter Year</label>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="number" class="form-control" value="<?php echo $year; ?>" id="number" name="number" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </div>
</div>
<?php
if (isset($_POST['submit'])) {
  $id=$_POST['id'];
  $year=$_POST['number'];
  $upd="UPDATE year_master SET year='$year' WHERE id=$id";
  $r=mysqli_query($con,$upd);
  if ($r==true) {
    ?>
    <script type="text/javascript">
      alert("year updated successfully.");
      window.location='year.php';
    </script>
    <?php
  }else {
    ?>
    <script type="text/javascript">
      alert("year not added");
      window.location='year.php';
    </script>
    <?php
  }
}


?>
<?php
include("footer.php");
?>
