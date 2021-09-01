<?php
include('header.php');
include('db.php');
$id=$_GET['sid'];
$sq="SELECT * FROM carting_mazdur WHERE id=$id";
$rn=mysqli_query($con,$sq);
if ($rn==true) {
  while($data=mysqli_fetch_assoc($rn)){
    $id=$data['id'];
    $vname1=$data['name'];
    $vtype=$data['mobile'];
  }
}
?>
<div class="col-md-3">

</div>
<div class="col-md-6" style="margin-top:12px">
  <div class="card">
  <h5 class="card-header">Carting Mazdur
  <a href="carting_mazdur_view.php" class="btn btn-primary" style="float:right">View All</a>
  </h5>

  <div class="card-body">
    <form action="carting_update.php" method="post">
  <div class="mb-3">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $vname1; ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Mobile Number</label>
    <input type="number" class="form-control" id="mobile" name="mobile" value="<?php echo $vtype; ?>" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

  </div>

</div>
  <br>
</div>
<?php
if (isset($_POST['submit'])) {
  $id=$_POST['id'];
  $vname=$_POST['name'];
  $vtype=$_POST['mobile'];
  $sql="UPDATE carting_mazdur SET name='$vname',mobile='$vtype' WHERE id=$id";
  $run=mysqli_query($con,$sql);
  if ($run==true) {
    ?>
    <script type="text/javascript">
      alert('data updated successfully');
      window.location='carting_mazdur_view.php';
    </script>
    <?php
  }
  else {
    ?>
    <script type="text/javascript">
      alert('data not updated successfully');
      window.location='carting_mazdur_view.php';
    </script>
    <?php
  }
}

?>
<?php
include('footer.php');
?>
