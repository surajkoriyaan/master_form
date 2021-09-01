<?php
include('header.php');
include('db.php');
$id=$_GET['sid'];
$sq="SELECT * FROM quantity_master WHERE id=$id";
$rn=mysqli_query($con,$sq);
if ($rn==true) {
  while($data=mysqli_fetch_assoc($rn)){
    $id=$data['id'];
    $quantity=$data['quantity'];
  }
}
?>
<div class="col-md-3">

</div>
<div class="col-md-6" style="margin-top:12px">
  <div class="card">
  <h5 class="card-header">Quantity Master Update
  <a href="quantity_view.php" class="btn btn-primary" style="float:right">View All</a>
  </h5>

  <div class="card-body">
    <form action="quantity_update.php" method="post">
  <div class="mb-3">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label class="form-label">Quantity</label>
    <input type="text" class="form-control" id="quantity" name="quantity" value="<?php echo $quantity; ?>" required>
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
  $quantity=$_POST['quantity'];
  $sql="UPDATE quantity_master SET quantity='$quantity' WHERE id=$id";
  $run=mysqli_query($con,$sql);
  if ($run==true) {
    ?>
    <script type="text/javascript">
      alert('data updated successfully');
      window.location='quantity_view.php';
    </script>
    <?php
  }
  else {
    ?>
    <script type="text/javascript">
      alert('data not updated successfully');
      window.location='quantity_view.php';
    </script>
    <?php
  }
}

?>
<?php
include('footer.php');
?>
