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
            <h1 class="m-0 text-dark">Comments</h1>
            <?php  if(isset($_GET['val5']))
                            {
                              ?>
            
            <div class="float-center">
            <div class="alert alert-danger" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong> <?php  if(isset($_GET['val5']))
                            {
                            echo $_GET['val5'];
                            } ?>
                            </strong>
            </div>
            </div>
          <?php
        } ?>
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
              <h3 class="card-title">List Of Comments</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Email</th>
                  <th>Comment</th>
                  <th>Delete</th>
                </thead>
                <tbody>
                <?php
                        include '../db.php';
                        $sql = "SELECT*FROM description order by id desc";
                        $result = $con->query($sql);
                        if ($result->num_rows > 0): ?>
                      <?php  
                      while($row = $result->fetch_assoc()): ?>
                        <tr>
                        <td><?php echo $row['email']; ?></td>
                        <td><textarea readonly><?php echo strip_tags($row['descri']);?></textarea></td>
                        <td><a href="valid.php?del=<?php echo $row['id'];?>"><button class="btn btn-danger">Delete</button></a></td>
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
<style>
 textarea {
  overflow-y: scroll;
  height: 60px;
  width: 100%;
  resize: none; /* Remove this if you want the user to resize the textarea */
    }
</style>
<script>
$("#success-alert").fadeTo(1000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});
</script>
<?php ob_end_flush();
?>
