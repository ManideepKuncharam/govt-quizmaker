<?php 
ob_start();
include("header.php");
if(!isset($_SESSION['id']))
{
  header("Location:../login.php");
}
?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:white;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quiz</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
              <li class="breadcrumb-item active">Quiz</li>
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
              <h3 class="card-title">List Of Quiz <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"> Filter Subject </button></h3>
            </div>
            <?php  if(isset($_GET['val6']))
                            {
                              ?>
            
            <div class="float-center">
            <div class="alert alert-danger" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong> <?php  if(isset($_GET['val6']))
                            {
                            echo $_GET['val6'];
                            } ?>
                            </strong>
            </div>
            </div>
          <?php
        } ?>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Code</th>
                  <th>Title</th>
                  <th>Class</th>
                  <th>Subject</th>
                  <th>Medium</th>
                  <th>Share</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                        include '../db.php';
                        if(isset($_POST['filter'])){
                          $class=$_POST['class'];
                          $sub=$_POST['subject'];
                          $med=$_POST['medium'];
                          $sql="SELECT * FROM quiz where class='$class' and subject='$sub' and medium='$med' ";
                          }
                          else{
                        $sql = "SELECT*FROM quiz ORDER BY  id desc";
                          }
                        $result = $con->query($sql);
                        if ($result->num_rows > 0): ?>
                      <?php  
                      while($row = $result->fetch_assoc()): ?>
                        <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['class']; ?></td>
                        <td><?php echo $row['subject']; ?></td>
                        <td><?php echo $row['medium']; ?></td>
                        <td><center><a href="https://api.whatsapp.com/send?&text=http://quizmaker.schooledu.co.in/list.php [Quiz Code:<?php echo $row['id']; ?>] [Quiz Title:<?php echo $row['title']; ?>]" target="_blank" class="fa fa-share-alt"></a></center></td>
                        <td><a href="valid.php?del3=<?php echo $row['id'];?>"><button class="btn btn-danger">Delete</button></a></td>
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
<div class="container">


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Question Bank</h4>
      </div>
      <div class="modal-body">
                  <div class="container-fluid">
                <div class="row">
                  <!-- left column -->
                  <div class="col-md-12">
                    <!-- jquery validation -->
                    <a href='quiz.php' ><button class='btn btn-danger'>Clear Filter</button></a><br><br>
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Filter</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form role="form" id="quickForm"method='post' action="quiz.php">
                        <div class="card-body">
                          <div class="form-group">
                              <label>Class</label>
                              <select class="form-control" name='class'>
                                <option value='class-5'>Class-5</option>
                                <option value='class-6'>Class-6</option>
                                <option value='class-7'>Class-7</option>
                                <option value='class-8'>Class-8</option>
                                <option value='class-9'>Class-9</option>
                                <option value='class-10'>Class-10</option>
                              </select>
                          </div>
                          <div class="form-group">
                                <label>Subject</label>
                                <select class="form-control" name='subject' >
                                  <option value='telugu'>Telugu</option>
                                  <option value='hindi'>Hindi</option>
                                  <option value='english'>English</option>
                                  <option value='maths'>Maths</option>
                                  <option value='science'>Science</option>
                                  <option value='social'>Social</option>
                                </select>
                           </div>
                           <div class="form-group">
                                <label>Medium</label>
                                <select class="form-control" name='medium' >
                                  <option value='telugu'>Telugu</option>
                                  <option value='urdu'>Urdu</option>
                                  <option value='english'>English</option>
                                </select>
                           </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary" name='filter'>Apply</button>
                        </div>
                      </form>
                    </div>
                    <!-- /.card -->
                    </div>
                  <!--/.col (left) -->
                  <!-- right column -->
                  <div class="col-md-6">

                  </div>
                  <!--/.col (right) -->
                </div>
                <!-- /.row -->
              </div><!-- /.container-fluid -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
  <script>
$("#success-alert").fadeTo(1000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});
</script>
</html>

<?php ob_end_flush();
?>
