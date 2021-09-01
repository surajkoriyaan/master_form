<?php
include('header.php');
include('db.php');
?>
<div class="col-md-3">

</div>
<div class="col-md-6" style="margin-top:12px">
  <div class="card">
  <h5 class="card-header">Brick Quantity Master
  <a href="quantity_view.php" class="btn btn-primary" style="float:right">View All</a>
  </h5>

  <div class="card-body">
    <form action="brick_quantity_master.php" method="post">
  <div class="mb-3">
    <label class="form-label">Quantity</label>
    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

  </div>

</div>
  <br>
</div>
<?php
if (isset($_POST['submit'])) {
  $quantity=$_POST['quantity'];
  $sql="INSERT INTO quantity_master(quantity) VALUES('$quantity')";
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
