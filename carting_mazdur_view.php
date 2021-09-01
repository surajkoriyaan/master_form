<?php include('header.php');
include('db.php');
?>
<div class="col-md-2">

</div>
<div class="col-md-8" style="margin-top:4px">
  <div class="card">
    <div class="card-header">
      All Carting Mazdur Details
      <a href="carting_mazdur.php" class="btn btn-primary" style="float:right">Add</a>
    </div>
    <div class="card-body">
      <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">S.N</th>
        <th scope="col">Number</th>
        <th scope="col">Mobile Number</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $c=1;
   $sql="SELECT * FROM carting_mazdur";
   $run=mysqli_query($con,$sql);
   if ($run==true) {
      while($row=mysqli_fetch_assoc($run)){
        ?>
     <tr>
        <td><?php echo $c++; ?></td>
       <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
        <td>
     <a href="carting_mazdur_update.php?sid=<?php echo $row['id']; ?>" class="badge bg-primary">update</a> /
      <a href="carting_mazdur_delete.php?sid=<?php echo $row['id']; ?>" class="badge bg-danger">delete</a>
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
