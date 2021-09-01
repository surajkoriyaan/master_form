<?php
include("header.php");
include("db.php");
?>
<div class="col-md-12">
  <div class="card">
  <div class="card-header">
    Add New Delivery site
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Delivery site</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="delivery_site.php" method="post">
    <div class="mb-3">
      <label  class="form-label">Delivery address</label>
      <input type="text" class="form-control" id="address" name="address" required>
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
      <th scope="col">address</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
   <?php
   $c=1;
   $sl="SELECT * FROM devilvery_";
   $r=mysqli_query($con,$sl);
   if ($r==true) {
     while ($row=mysqli_fetch_assoc($r)) {
       ?>
       <tr>
         <td><?php echo $c++; ?></td>
         <td><?php echo $row['name'];?></td>
         <td>
     <a href="delivery_update.php?sid=<?php echo $row['id']; ?>"><span class="badge bg-info text-dark">Update</span></a>
       <a href="delivery_delete.php?sid=<?php echo $row['id']; ?>"><span class="badge bg-danger">Delete</span></a>
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
  $address=$_POST["address"];
    $inst="INSERT INTO devilvery_(name) values('$address')";
    if (mysqli_query($con,$inst)) {
      ?>
      <script type="text/javascript">
        alert("address added successfully");
        window.location='delivery_site.php';
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
