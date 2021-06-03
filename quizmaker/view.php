<?php 
ob_start();
session_start();
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
              <h3 class="card-title">Your Answers</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Question</th>
                  <th>option</th>
                  <th>Answer</th>
                </tr>
                </thead>
                <tbody>
                <?php
                        include 'db.php';
                        $user=$_SESSION['id'];
                        $id=$_GET['show'];
                        $sql = "SELECT*FROM response where user_id=$user and quiz_id=$id";
                        $result = $con->query($sql);
                        if ($result->num_rows > 0): ?>
                      <?php  
                      while($row = $result->fetch_assoc()): ?>
                         
                        <tr>
                        <?php $a=$row['ques_id'];
                         $sql1="SELECT*FROM question where id=$a";
                         $result1 = $con->query($sql1);
                         $row1 = $result1->fetch_assoc(); ?>
                        <td><?php echo $row1['question']; ?></td>
                        <?php 
                        $b=$row['option_id'];
                        $sql2="SELECT*FROM option where id=$b";
                        $result2 = $con->query($sql2);
                        $row2 = $result2->fetch_assoc(); 
                        ?>
                        <td><?php echo $row2['option']; ?></td>
                        <td><?php echo $row2['is_correct']; ?></td>
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
          <!-- /.card --
    <!-- /.content -->
  </div>
</section>
 
</body>

</html>

<?php ob_end_flush();
?>
