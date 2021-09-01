<?php
include("header.php");
include("db.php");
?>
<div class="col-md-12">
  <div class="card">
  <div class="card-header">
    Add Bharai Majdur Master
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Bharai Majdur Master</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="bharai_master.php" method="post">
    <div class="mb-3">
      <label  class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
      <label  class="form-label">Address</label>
      <textarea name="address" class="form-control" rows="2" cols="2" required></textarea>
    </div>
    <div class="mb-3">
      <label  class="form-label">Mobile Number</label>
      <input type="number" class="form-control" id="mobile1" name="mobile1" required>
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
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php
   $c=1;
   $sl="SELECT * FROM bharai_master";
   $r=mysqli_query($con,$sl);
   if ($r==true) {
     while ($row=mysqli_fetch_assoc($r)) {
       ?>
       <tr>
         <td><?php echo $c++; ?></td>
         <td><?php echo $row['name'];?></td>
         <td><?php echo $row['address'];?></td>
         <td><?php echo $row['mobile'];?></td>
         <td>
     <a href="bharai_update.php?sid=<?php echo $row['id']; ?>"><span class="badge bg-info text-dark">Update</span></a>
       <a href="bharai_delete.php?sid=<?php echo $row['id']; ?>"><span class="badge bg-danger">Delete</span></a>
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
  $name=$_POST["name"];
    $address=$_POST["address"];
      $mobile1=$_POST["mobile1"];
  if (strlen($mobile1)==10) {
    $inst="INSERT INTO bharai_master(name,address,mobile)
    values('$name','$address','$mobile1')";
    if (mysqli_query($con,$inst)) {
      ?>
      <script type="text/javascript">
        alert("Bharai Majdur added successfully");
        window.location='bharai_master.php';
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
else {
  ?>
  <script type="text/javascript">
    alert("please enter valid number");
  </script>
  <?php
}
}


?>

<?php
include("footer.php");
?>
