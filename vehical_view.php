<?php include('header.php');
include('db.php');
?>
<div class="col-md-2">

</div>
<div class="col-md-8" style="margin-top:4px">
  <div class="card">
    <div class="card-header">
      All Vehicle Details
      <a href="vehical_master.php" class="btn btn-primary" style="float:right">Add</a>
    </div>
    <div class="card-body">
      <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">S.N</th>
        <th scope="col">Vehicle Number</th>
        <th scope="col">Vehicle Type</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $c=1;
   $sql="SELECT * FROM vehicle";
   $run=mysqli_query($con,$sql);
   if ($run==true) {
      while($row=mysqli_fetch_assoc($run)){
        ?>
     <tr>
        <td><?php echo $c++; ?></td>
       <td><?php echo $row['vehicle']; ?></td>
        <td><?php echo $row['vihical_type']; ?></td>
        <td>
     <a href="vehicle_update.php?sid=<?php echo $row['id']; ?>" class="badge bg-primary">update</a> /
      <a href="vehicle_delete.php?sid=<?php echo $row['id']; ?>" class="badge bg-danger">delete</a>
        </td>
     </tr>
        <?php
      }
   }


    ?>
    </tbody>
  </table>
    </div>
  </div>
</div>

<?php include('footer.php');  ?>
