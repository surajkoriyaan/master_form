<?php include('header.php');
include('db.php');
?>

<div class="col-md-12" style="margin-top:4px">
  <div class="card">
    <div class="card-header">
      All Bricks Details
      <a href="bricks.php" class="btn btn-primary" style="float:right">Add</a>
    </div>
    <div class="card-body">
      <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">S.N</th>
        <th scope="col">Date</th>
        <th scope="col">Challan No</th>
        <th scope="col">Party Name</th>
        <th scope="col">Site Address</th>
        <th>Material Type</th>
          <th>Quantity</th>
            <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $c=1;
   $sql="SELECT * FROM briks";
   $run=mysqli_query($con,$sql);
   if ($run==true) {
      while($row=mysqli_fetch_assoc($run)){
        ?>
     <tr>
        <td><?php echo $c++; ?></td>
       <td><?php echo $row['date1']; ?></td>
        <td><?php echo $row['challanno']; ?></td>
          <td><?php echo $row['partyname']; ?></td>
            <td><?php echo $row['siteaddress']; ?></td>
              <td><?php echo $row['material_type']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
        <td>
     <a href="bricks_update.php?sid=<?php echo $row['id']; ?>" class="badge bg-primary">update</a> /
      <a href="bricks_delete.php?sid=<?php echo $row['id']; ?>" class="badge bg-danger">delete</a>
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
