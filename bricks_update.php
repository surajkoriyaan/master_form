<?php
include('db.php');
$id=$_GET['sid'];
$sql="SELECT * FROM briks WHERE id=$id";
$run=mysqli_query($con,$sql);
if ($run==true) {
  while($row=mysqli_fetch_assoc($run)){
   $id=$row['id'];
   $date=$row['date1'];
   $challan=$row['challanno'];
   $partname=$row['partyname'];
   $siteaddress=$row['siteaddress'];
   $materialtype=$row['material_type'];
   $quantity=$row['quantity'];
   $rate=$row['rate'];
   $sold_dd=$row['sold_dd'];
   $vehicleno=$row['vehicleno'];
   $drivername=$row['drivername'];
   $mazdur1=$row['mazdur1'];
   $mazdur2=$row['mazdur2'];
   $mazdur3=$row['mazdur3'];
   $mazdur4=$row['mazdur4'];
   $bricksdd=$row['bricksdd'];
  }
}
?>
<?php
include('header.php');
?>
<div class="col-md-3">

</div>
<div class="col-md-6" style="margin-top:12px">
  <div class="card">
  <h5 class="card-header">Bricks Sales Update
  <a href="brikcs_view.php" class="btn btn-primary" style="float:right">View All</a>
  </h5>

  <div class="card-body">
    <form action="bricks_update_action.php" method="post">
  <div class="mb-3">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label class="form-label">Date</label>
    <input type="date" class="form-control" id="date" name="date" value="<?php echo $date; ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Challan No</label>
    <input type="text" class="form-control" id="challan" name="challan" value="<?php echo $challan; ?>" placeholder="Enter Challan No" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Party Name</label>
    <select class="form-control" name="partyname" id="partyname" required>
      <option><?php echo $partname; ?></option>
      <?php
    $sql="select * from party_master";
    $run=mysqli_query($con,$sql);
    while ($row=mysqli_fetch_assoc($run)) {
      ?>
      <option><?php echo $row['name'] ?></option>
      <?php
    }
      ?>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Site Address</label>
    <select class="form-control" name="siteaddress" id="siteaddress">
      <option><?php echo $siteaddress; ?></option>
      <?php
    $sql1="select * from carting_master";
    $run1=mysqli_query($con,$sql1);
    while ($row1=mysqli_fetch_assoc($run1)) {
      ?>
      <option><?php echo $row1['address'] ?></option>
      <?php
    }
      ?>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Material Type</label>
    <select class="form-control" name="material" id="material" required>
      <option><?php echo $materialtype; ?></option>
      <?php
    $sql="select * from material";
    $run=mysqli_query($con,$sql);
    while ($row=mysqli_fetch_assoc($run)) {
      ?>
      <option><?php echo $row['material_type'] ?></option>
      <?php
    }
      ?>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Quantity</label>
    <input type="text" class="form-control" id="quantity" name="quantity" value="<?php echo $quantity; ?>" placeholder="Enter Quantity" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Rate</label>
    <input type="text" class="form-control" id="rate" name="rate" value="<?php echo $rate; ?>" placeholder="Enter Rate" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Sold By DD</label>
    <select class="form-control" name="sold" id="sold" required>
      <option><?php echo $sold_dd; ?></option>
      <option value="Direct">Direct</option>
      <option value="Muntiaj">Muntiaj</option>
      <option value="Mohsin">Mohsin</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Vehicle Number</label>
    <select class="form-control" name="vehical" id="vehical" required>
      <option><?php echo $vehicleno; ?></option>
      <?php
    $sql1="select * from vehicle";
    $run1=mysqli_query($con,$sql1);
    while ($row1=mysqli_fetch_assoc($run1)) {
      ?>
      <option><?php echo $row1['vehicle'] ?></option>
      <?php
    }
      ?>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Driver Name</label>
    <select class="form-control" name="drivername" id="drivername" required>
      <option><?php echo $drivername; ?></option>
      <?php
    $sql1="select * from driver_master";
    $run1=mysqli_query($con,$sql1);
    while ($row1=mysqli_fetch_assoc($run1)) {
      ?>
      <option><?php echo $row1['name'] ?></option>
      <?php
    }
      ?>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Mazdur 1 </label>
    <select class="form-control" name="mazdur1" id="mazdur1">
      <option><?php echo $mazdur1; ?></option>
      <?php
    $sql1="select * from carting_mazdur";
    $run1=mysqli_query($con,$sql1);
    while ($row1=mysqli_fetch_assoc($run1)) {
      ?>
      <option><?php echo $row1['name'] ?></option>
      <?php
    }
      ?>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Mazdur 2 </label>
    <select class="form-control" name="mazdur2" id="mazdur2">
      <option><?php echo $mazdur2; ?></option>
      <?php
    $sql1="select * from carting_mazdur";
    $run1=mysqli_query($con,$sql1);
    while ($row1=mysqli_fetch_assoc($run1)) {
      ?>
      <option><?php echo $row1['name'] ?></option>
      <?php
    }
      ?>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Mazdur 3 </label>
    <select class="form-control" name="mazdur3" id="mazdur3">
      <option><?php echo $mazdur3; ?></option>
      <?php
    $sql1="select * from carting_mazdur";
    $run1=mysqli_query($con,$sql1);
    while ($row1=mysqli_fetch_assoc($run1)) {
      ?>
      <option><?php echo $row1['name'] ?></option>
      <?php
    }
      ?>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Mazdur 4 </label>
    <select class="form-control" name="mazdur4" id="mazdur4">
      <option><?php echo $mazdur4; ?></option>
      <?php
    $sql1="select * from carting_mazdur";
    $run1=mysqli_query($con,$sql1);
    while ($row1=mysqli_fetch_assoc($run1)) {
      ?>
      <option><?php echo $row1['name'] ?></option>
      <?php
    }
      ?>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Bricks Sold From DD</label>
    <select class="form-control" name="brikcsdd" id="brikcsdd" required>
      <option><?php echo $bricksdd; ?></option>
      <option>Bhatta</option>
      <option>Stock</option>
      <option>Chatta</option>
    </select>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

  </div>

</div>
  <br>
</div>


<?php
include('footer.php');
?>
