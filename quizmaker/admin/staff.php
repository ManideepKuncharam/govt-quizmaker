<?php 
ob_start();
include("header.php");
if(!isset($_SESSION['id']))
{
  header("Location:../login.php");
}
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="background-color:white;" >

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Staff</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
                <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
            <div class="card-header">
              <h3 class="card-title">List Of Staff</h3>
            </div>
            <!-- /.card-header -->
            <?php 
             if(isset($_GET['val']))
            {
            ?>
            <div class="float-center">
            <div class="alert alert-danger" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>
               <?php  if(isset($_GET['val']))
                          {
                            echo $_GET['val'];
                      }
                           ?>

              </strong>
            </div>
            </div>
           <?php 
            }
           ?>
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>First-Name</th>
                  <th>Last-Name</th>
                  <th>Mobile Number</th>
                  <th>Email</th>
                  <th>Designation</th>
                  <th>Name Of the School</th>
                  <th>Name Of the Mandal</th>
                  <th>Name Of the District</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                        include '../db.php';
                        $sql = "SELECT*FROM users where type!='student' AND type!='admin'";
                        $result = $con->query($sql);
                        if ($result->num_rows > 0): ?>
                      <?php  
                      while($row = $result->fetch_assoc()): ?>
                        <tr>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                        <td><?php echo $row['school']; ?></td>
                        <td><?php echo $row['mandal']; ?></td>
                        <td><?php echo $row['district']; ?></td>
                        <td><a href='valid.php?delete2=<?php echo $row["id"];?>' ><button class='btn btn-danger'>Delete</button></a></td>
                        </tr>
                        <?php endwhile; ?>
                      <?php endif; ?>
                  <?php
                        $con->close();
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
    <!-- /.content -->
  </div>
</section>
</body>
</html>
<script>
$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});
</script>
<?php ob_end_flush();
?>
