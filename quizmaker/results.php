<?php 
ob_start();
session_start();
include("header.php");
?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:white;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Results</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="list.php">Home</a></li>
              <li class="breadcrumb-item active">Results</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
                <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

            <div class="card-header">
              <h3 class="card-title">List Of Results</h3><br>
                            <?php 
             if(isset($_GET['val7']))
            {
            ?>
            <div class="float-center">
            <div class="alert alert-success" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>
               <?php  if(isset($_GET['val7']))
                          {
                            echo $_GET['val7'];
                      }
                           ?>

              </strong>
            </div>
            </div>
           <?php 
            }
           ?>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Quiz Code</th>
                  <th>Quiz Title</th>
                  <th>Percentage</th>
                  <th>View Results</th>
                  <th>Certificate</th>
                </tr>
                </thead>
                <tbody>
                <?php
                        include 'db.php';
                        $id=$_SESSION['id'];
                        $sql = "SELECT*FROM results where user_id=$id order by id desc";
                        $result = $con->query($sql);
                        if ($result->num_rows > 0): ?>
                      <?php  
                      while($row = $result->fetch_assoc()): ?>
                        <tr>
                        <td><?php echo $row['quiz_id']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['marks']; ?>%</td>
                        <td><a href='view.php?show=<?php echo $row["quiz_id"]; ?>' ><button class='btn btn-success'>View</button></a></td>
                        <?php if($row['marks']>35): ?>
                      <td><a href='createpdf2.php?id=<?php echo $row["id"]; ?>' target="_blank"><button class='btn btn-info' >Download</button></a></td>
                        <?php endif;?> 
                        <?php if($row['marks']<=35): ?>
                      <td>Not Qualified</td>
                        <?php endif;?> 
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
<script>
$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});
</script>
</html>

<?php ob_end_flush();
?>
