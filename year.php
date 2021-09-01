<?php
include("header.php");
include("db.php");
?>
<div class="col-md-12">
  <div class="card">
  <div class="card-header">
    Add New Year
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Year</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="year.php" method="post">
    <div class="mb-3">
      <label  class="form-label">Enter New Year</label>
      <input type="number" class="form-control" id="number" name="number" required>
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
      <th scope="col">Year</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
   <?php
   $c=1;
   $sl="SELECT * FROM year_master";
   $r=mysqli_query($con,$sl);
   if ($r==true) {
     while ($row=mysqli_fetch_assoc($r)) {
       ?>
       <tr>
         <td><?php echo $c++; ?></td>
         <td><?php echo $row['year'];?></td>
         <td>
     <a href="year_update.php?sid=<?php echo $row['id']; ?>"><span class="badge bg-info text-dark">Update</span></a>
       <a href="year_delete.php?sid=<?php echo $row['id']; ?>"><span class="badge bg-danger">Delete</span></a>
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
  $year=$_POST["number"];
  $sql="SELECT * FROM year_master WHERE year='$year'";
  $run=mysqli_query($con,$sql);
  if (mysqli_fetch_assoc($run)<1) {
    $inst="INSERT INTO year_master(year) values('$year')";
    if (mysqli_query($con,$inst)) {
      ?>
      <script type="text/javascript">
        alert("year added successfully");
        window.location='year.php';
      </script>
      <?php
    }else {
      ?>
      <script type="text/javascript">
        alert("please fill the details");
      </script>
      <?php
    }
  }else {
    ?>
    <script type="text/javascript">
      alert("this year already exists.");
    </script>
    <?php
  }
}


?>

<?php
include("footer.php");
?>
