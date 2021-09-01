<?php
include('header.php');
include('db.php');
?>
<div class="col-md-3">

</div>
<div class="col-md-6" style="margin-top:12px">
  <div class="card">
  <h5 class="card-header">Carting Mazdur
  <a href="carting_mazdur_view.php" class="btn btn-primary" style="float:right">View All</a>
  </h5>

  <div class="card-body">
    <form action="carting_mazdur.php" method="post">
  <div class="mb-3">
    <label class="form-label">Number</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Mobile Number</label>
    <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

  </div>

</div>
  <br>
</div>
<?php
if (isset($_POST['submit'])) {
  $vname=$_POST['name'];
  $vtype=$_POST['mobile'];
  $sql="INSERT INTO carting_mazdur(name,mobile) VALUES('$vname','$vtype')";
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
