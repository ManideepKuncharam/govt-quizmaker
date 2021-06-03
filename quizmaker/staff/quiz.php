<?php 
ob_start();
include("header.php");
if(!isset($_SESSION['id']))
{
  header("Location:../login.php");
}
?>
<div align="center">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Quiz main Header Above -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-6002078647584025"
     data-ad-slot="9523483332"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:white;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List of Quiz</h1>
            <?php 
             if(isset($_GET['msg4']))
            {
            ?>
            <div class="float-center">
            <div class="alert alert-danger" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>
               <?php  if(isset($_GET['msg4']))
                          {
                            echo $_GET['msg4'];
                      }
                           ?>

              </strong>
            </div>
            </div>
           <?php 
            }
           ?>
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
      <div class="row mx-auto">
        <div class="col-12 mx-auto">
            <div class="card-header">
              <h3 class="card-title"><a href='createquiz.php'><button type="submit" class="btn btn-primary" name='submit'>Create New Quiz</button></a></h3>  
            </div>
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
                  <th>Open/Edit</th>
                  <th>Share</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                        include '../db.php';
                        $id=$_SESSION['id'];
                        $sql = "SELECT*FROM quiz where user_id=$id ORDER BY  id desc";
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
                        <td>
                             <a href='editquiz.php?edit=<?php echo $row["id"]; ?>'
                                 class='btn btn-info'>Open/Edit</a>
                        </td>
                        <td><center><a href="https://api.whatsapp.com/send?&text=http://quizmaker.schooledu.co.in/list.php [Quiz Code:<?php echo $row['id']; ?>] [Quiz Title:<?php echo $row['title']; ?>]" class="fa fa-share-alt" target="_blank"></a></center></td>
                        <td>
                             <a href='valid.php?id=<?php echo $row["id"]; ?>'
                                 class='btn btn-danger'>Delete</a>
                        </td>
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

<div align="center">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- quiz resp -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6002078647584025"
     data-ad-slot="2810859032"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div>