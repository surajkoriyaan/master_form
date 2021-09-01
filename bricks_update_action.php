<?php
include('db.php');
if (isset($_POST['submit'])) {
  $id=$_POST['id'];
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
  $brikdata="UPDATE briks SET date1='$date',challanno='$challan',partyname='$partname',
  siteaddress='$siteaddress',material_type='$materialtype',quantity='$quantity',
 rate='$rate',sold_dd='$solddd',vehicleno='$vehiclenumber',
 drivername='$drivername',mazdur1='$mazdur1',mazdur2='$mazdur2',
 mazdur3='$mazdur3',mazdur4='$mazdur4',bricksdd='$briksdd' WHERE id=$id";
  $query=mysqli_query($con,$brikdata);
  if ($query==true) {
    ?>
    <script type="text/javascript">
      alert('data updated successfully');
    window.location='brikcs_view.php';
    </script>
    <?php
  }else {
    ?>
    <script type="text/javascript">
      alert('data not updated successfully');
     window.location='brikcs_view.php';
    </script>
    <?php
  }
}


?>
