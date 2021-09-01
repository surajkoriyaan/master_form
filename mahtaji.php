<?php
include("header.php");
include("db.php");
?>
<div class="col-md-12">
  <div class="card">
  <div class="card-header">
    Add New Mehtaji Master
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Mehtaji</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="mahtaji.php" method="post">
    <div class="mb-3">
      <label  class="form-label">Enter Mehtaji Name</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
      <label  class="form-label">Enter Address</label>
      <textarea name="address" class="form-control" rows="2" cols="2" required></textarea>
    </div>
    <div class="mb-3">
      <label  class="form-label">Enter Mobile Number 1</label>
      <input type="number" class="form-control" id="mobile1" name="mobile1" required>
    </div>
    <div class="mb-3">
      <label  class="form-label">Enter Mobile Number 2</label>
      <input type="number" class="form-control" id="mobile2" name="mobile2" required>
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
      <th scope="col">Mobile 1</th>
      <th scope="col">Mobile 2</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php
   $c=1;
   $sl="SELECT * FROM mehtaji_master";
   $r=mysqli_query($con,$sl);
   if ($r==true) {
     while ($row=mysqli_fetch_assoc($r)) {
       ?>
       <tr>
         <td><?php echo $c++; ?></td>
         <td><?php echo $row['name'];?></td>
         <td><?php echo $row['address'];?></td>
         <td><?php echo $row['mobile1'];?></td>
         <td><?php echo $row['mobile2'];?></td>
         <td>
     <a href="mehtaji_update.php?sid=<?php echo $row['id']; ?>"><span class="badge bg-info text-dark">Update</span></a>
       <a href="mehtaji_delete.php?sid=<?php echo $row['id']; ?>"><span class="badge bg-danger">Delete</span></a>
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
        $mobile2=$_POST["mobile2"];
  if (strlen($mobile1)==10 && strlen($mobile2)==10) {
    $inst="INSERT INTO mehtaji_master(name,address,mobile1,mobile2)
    values('$name','$address','$mobile1','$mobile2')";
    if (mysqli_query($con,$inst)) {
      ?>
      <script type="text/javascript">
        alert("mehtaji added successfully");
        window.location='mahtaji.php';
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
