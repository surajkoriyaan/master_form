<?php
include('header.php');
include('db.php');
$id=$_GET['sid'];
$sq="SELECT * FROM vehicle WHERE id=$id";
$rn=mysqli_query($con,$sq);
if ($rn==true) {
  while($data=mysqli_fetch_assoc($rn)){
    $id=$data['id'];
    $vname1=$data['vehicle'];
    $vtype=$data['vihical_type'];
  }
}
?>
<div class="col-md-3">

</div>
<div class="col-md-6" style="margin-top:12px">
  <div class="card">
  <h5 class="card-header">Vehicle Master
  <a href="vehical_view.php" class="btn btn-primary" style="float:right">View All</a>
  </h5>

  <div class="card-body">
    <form action="vehicle_update.php" method="post">
  <div class="mb-3">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label class="form-label">Vehicle Number</label>
    <input type="text" class="form-control" id="vehical_number" name="vehical_number" value="<?php echo $vname1; ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Vehicle  Type</label>
    <input type="text" class="form-control" id="vehical_type" name="vehical_type" value="<?php echo $vtype; ?>" required>
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
  $vname=$_POST['vehical_number'];
  $vtype=$_POST['vehical_type'];
  $sql="UPDATE vehicle SET vehicle='$vname',vihical_type='$vtype' WHERE id=$id";
  $run=mysqli_query($con,$sql);
  if ($run==true) {
    ?>
    <script type="text/javascript">
      alert('data updated successfully');
      window.location='vehical_view.php';
    </script>
    <?php
  }
  else {
    ?>
    <script type="text/javascript">
      alert('data not updated successfully');
      window.location='vehical_view.php';
    </script>
    <?php
  }
}

?>
<?php
include('footer.php');
?>
