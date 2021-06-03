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
              <li class="breadcrumb-item"><a href="createquiz.php">Home</a></li>
              <li class="breadcrumb-item active">Quiz</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
                <!-- Main content -->
    <section class="content">
            <!-- Button trigger modal -->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" id="quickForm"method='post' action="list.php">
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
                                  <option value='science'>Gen Science</option>
                                  <option value='pscience'>Physical Science</option>
                                  <option value='bscience'>Biological Science</option>
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
                          <button type="submit" class="btn btn-primary" name='filter1'>Apply</button>
                        </div>
                      </form>
      </div>
    </div>
  </div>
</div>
            <!-- /.card-header -->
            
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>User Id</th>
                  <th>Name</th>
                  <th>School Name</th>
                  <th>Percentage</th>
                </tr>
                </thead>
                <tbody>
                <?php
                        include '../db.php';
                        $show=$_GET['show'];
                        $sql = "SELECT*FROM results where quiz_id='$show' order by id desc";
                        $result = $con->query($sql);
                        if ($result->num_rows > 0): ?>
                      <?php  
                      while($row = $result->fetch_assoc()): ?>
                        <td><?php echo $row['user_id']; ?></td>
                        <?php
                        include '../db.php';
                        $i=$row['user_id'];
                        $sql1 = "SELECT*FROM users where id='$i'";
                        $result1 = $con->query($sql1);
                        $row1 = $result1->fetch_assoc(); ?>
                        <td><?php echo $row1['firstname']; ?></td>
                        <td><?php echo $row1['school']; ?></td>
                        <td><?php echo $row['marks']; ?>%</td>
                        </tr>
                        <?php endwhile; ?>
                      <?php endif; ?>
                  <?php
                        $con->close();
                  ?>
                </tbody>
              </table>
            <!-- /.card-body -->
            </div>
    <!-- /.content -->
  </div>
</section>
 </div>

</body>

</html>


<?php ob_end_flush();
?>