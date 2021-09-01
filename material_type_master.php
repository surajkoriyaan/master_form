<?php
include('header.php');
include('db.php');
?>
<div class="col-md-3">

</div>
<div class="col-md-6" style="margin-top:12px">
  <div class="card">
  <h5 class="card-header">Material Type Master
  <a href="material_view.php" class="btn btn-primary" style="float:right">View All</a>
  </h5>

  <div class="card-body">
    <form action="material_type_master.php" method="post">
  <div class="mb-3">
    <label class="form-label">Material Type Master</label>
    <input type="text" class="form-control" id="material" name="material" placeholder="Enter Material Type Master" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

  </div>

</div>
  <br>
</div>
<?php
if (isset($_POST['submit'])) {
  $material=$_POST['material'];
  $sql="INSERT INTO material(material_type) VALUES('$material')";
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
