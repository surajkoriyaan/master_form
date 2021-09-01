<?php
include("header.php");
include("db.php");
?>
<div class="col-md-12">
  <div class="card">
  <div class="card-header">
    Add Carting Master
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Carting Master</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="carting_master.php" method="post">
    <div class="mb-3">
      <label  class="form-label">Vehicle number</label>
      <input type="text" class="form-control" id="number" name="number" required>
    </div>
    <div class="mb-3">
      <label  class="form-label">delivery site</label>
      <textarea name="address" class="form-control" rows="2" cols="2" required></textarea>
    </div>
    <div class="mb-3">
      <label  class="form-label">Amount</label>
      <input type="number" class="form-control" id="amount" name="amount" required>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
  </div>
  <div class="card-body">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S.n</th>
      <th scope="col">number</th>
      <th scope="col">delivery site</th>
      <th scope="col">amount</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php
   $c=1;
   $sl="SELECT * FROM carting_master";
   $r=mysqli_query($con,$sl);
   if ($r==true) {
     while ($row=mysqli_fetch_assoc($r)) {
       ?>
       <tr>
         <td><?php echo $c++; ?></td>
         <td><?php echo $row['num'];?></td>
         <td><?php echo $row['address'];?></td>
         <td><?php echo $row['amount'];?></td>
         <td>
     <a href="carting_update.php?sid=<?php echo $row['id']; ?>"><span class="badge bg-info text-dark">Update</span></a>
       <a href="carting_delete.php?sid=<?php echo $row['id']; ?>"><span class="badge bg-danger">Delete</span></a>
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
<?php
if (isset($_POST["submit"])) {
  $num=$_POST["number"];
    $address=$_POST["address"];
      $amount=$_POST["amount"];
    $inst="INSERT INTO carting_master(num,address,amount)
    values('$num','$address','$amount')";
    if (mysqli_query($con,$inst)) {
      ?>
      <script type="text/javascript">
        alert("carting master added successfully");
        window.location='carting_master.php';
      </script>
      <?php
    }else {
      ?>
      <script type="text/javascript">
        alert("please fill the details");
      </script>
      <?php
    }
}


?>

<?php
include("footer.php");
?>
