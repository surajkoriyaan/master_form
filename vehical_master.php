<?php
include('header.php');
include('db.php');
?>
<div class="col-md-3">

</div>
<div class="col-md-6" style="margin-top:12px">
  <div class="card">
  <h5 class="card-header">Vehicle Master
  <a href="vehical_view.php" class="btn btn-primary" style="float:right">View All</a>
  </h5>

  <div class="card-body">
    <form action="vehical_master.php" method="post">
  <div class="mb-3">
    <label class="form-label">Vehicle Number</label>
    <input type="text" class="form-control" id="vehical_number" name="vehical_number" placeholder="Enter Vehicle Number" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Vehicle  Type</label>
    <input type="text" class="form-control" id="vehical_type" name="vehical_type" placeholder="Enter Vehicle Type" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

  </div>

</div>
  <br>
</div>
<?php
if (isset($_POST['submit'])) {
  $vname=$_POST['vehical_number'];
  $vtype=$_POST['vehical_type'];
  $sql="INSERT INTO vehicle(vehicle,vihical_type) VALUES('$vname','$vtype')";
  $run=mysqli_query($con,$sql);
  if ($run==true) {
    ?>
    <script type="text/javascript">
      alert('data submitted successfully');
    </script>
    <?php
  }
  else {
    ?>
    <script type="text/javascript">
      alert('data not submitted successfully');
    </script>
    <?php
  }
}

?>
<?php
include('footer.php');
?>
