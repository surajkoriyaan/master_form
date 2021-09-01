<?php
include('header.php');
include('db.php');
?>
<div class="col-md-3">

</div>
<div class="col-md-6" style="margin-top:12px">
  <div class="card">
  <h5 class="card-header">Bricks Sales Form
  <a href="brikcs_view.php" class="btn btn-primary" style="float:right">View All</a>
  </h5>

  <div class="card-body">
    <form action="bricks.php" method="post">
  <div class="mb-3">
    <label class="form-label">Date</label>
    <input type="date" class="form-control" id="date" name="date" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Challan No</label>
    <input type="text" class="form-control" id="challan" name="challan" placeholder="Enter Challan No" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Party Name</label>
    <select class="form-control" name="partyname" id="partyname" required>
      <option value="">Select Party Name</option>
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
      <option value="">Select Site Address</option>
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
      <option value="">Select Material Type</option>
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
    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Rate</label>
    <input type="text" class="form-control" id="rate" name="rate" placeholder="Enter Rate" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Sold By DD</label>
    <select class="form-control" name="sold" id="sold" required>
      <option value="">Select DD</option>
      <option value="Direct">Direct</option>
      <option value="Muntiaj">Muntiaj</option>
      <option value="Mohsin">Mohsin</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Vehicle Number</label>
    <select class="form-control" name="vehical" id="vehical" required>
      <option value="">Select Vehicle Number</option>
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
      <option value="">Select Driver Name</option>
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
      <option value="">Select Mazdur1</option>
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
      <option value="">Select Mazdur1</option>
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
      <option value="">Select Mazdur1</option>
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
      <option value="">Select Mazdur1</option>
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
      <option value="">Select Bricks Sold From DD</option>
      <option value="Direct">Bhatta</option>
      <option value="Muntiaj">Stock</option>
      <option value="Mohsin">Chatta</option>
    </select>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

  </div>

</div>
  <br>
</div>
<?php
if (isset($_POST['submit'])) {
  $date=$_POST['date'];
  $challan=$_POST['challan'];
  $partname=$_POST['partyname'];
  $siteaddress=$_POST['siteaddress'];
  $materialtype=$_POST['material'];
  $quantity=$_POST['quantity'];
  $rate=$_POST['rate'];
  $solddd=$_POST['sold'];
  $vehiclenumber=$_POST['vehical'];
  $drivername=$_POST['drivername'];
  $mazdur1=$_POST['mazdur1'];
  $mazdur2=$_POST['mazdur2'];
  $mazdur3=$_POST['mazdur3'];
  $mazdur4=$_POST['mazdur4'];
  $briksdd=$_POST['brikcsdd'];
  $brikdata="INSERT INTO briks(date1,challanno,partyname,siteaddress,material_type,quantity,
 rate,sold_dd,vehicleno,drivername,mazdur1,mazdur2,mazdur3,mazdur4,bricksdd)
 VALUES('$date','$challan','$partname','$siteaddress','$materialtype','$quantity',
  '$rate','$solddd','$vehiclenumber','$drivername','$mazdur1','$mazdur2','$mazdur3','$mazdur4',
  '$briksdd')";
  $query=mysqli_query($con,$brikdata);
  if ($query==true) {
    ?>
    <script type="text/javascript">
      alert('data inserted successfully');
      window.location='bricks.php';
    </script>
    <?php
  }else {
    ?>
    <script type="text/javascript">
      alert('data not inserted successfully');
     window.location='bricks.php';
    </script>
    <?php
  }
}


?>

<?php
include('footer.php');
?>
