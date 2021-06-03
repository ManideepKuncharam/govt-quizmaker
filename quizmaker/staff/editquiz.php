<?php 
ob_start();
include("header.php");
if(!isset($_SESSION['id']))
{
  header("Location:../login.php");
}
?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Quiz main Header Above -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-6002078647584025"
     data-ad-slot="9523483332"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color:white;" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Quiz</h1>
            <?php 
             if(isset($_GET['msg']))
            {
            ?>
            <div class="float-center">
            <div class="alert alert-success" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>
               <?php  if(isset($_GET['msg']))
                          {
                            echo $_GET['msg'];
                      }
                           ?>

              </strong>
            </div>
            </div>
           <?php 
            }
           ?>
                       <?php 
             if(isset($_GET['mess']))
            {
            ?>
            <div class="float-center">
            <div class="alert alert-success" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>
               <?php  if(isset($_GET['mess']))
                          {
                            echo $_GET['mess'];
                      }
                           ?>

              </strong>
            </div>
            </div>
           <?php 
            }
           ?>
                       <?php 
             if(isset($_GET['msg6']))
            {
            ?>
            <div class="float-center">
            <div class="alert alert-danger" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>
               <?php  if(isset($_GET['msg6']))
                          {
                            echo $_GET['msg6'];
                      }
                           ?>

              </strong>
            </div>
            </div>
           <?php 
            }
           ?>
                       <?php 
             if(isset($_GET['msg5']))
            {
            ?>
            <div class="float-center">
            <div class="alert alert-success" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>
               <?php  if(isset($_GET['msg5']))
                          {
                            echo $_GET['msg5'];
                      }
                           ?>

              </strong>
            </div>
            </div>
           <?php 
            }
           ?>
                       <?php 
             if(isset($_GET['msg3']))
            {
            ?>
            <div class="float-center">
            <div class="alert alert-success" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>
               <?php  if(isset($_GET['msg3']))
                          {
                            echo $_GET['msg3'];
                      }
                           ?>

              </strong>
            </div>
            </div>
           <?php 
            }
           ?>
            <?php 
             if(isset($_GET['msg1']))
            {
            ?>
            <div class="float-center">
            <div class="alert alert-success" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>
               <?php  if(isset($_GET['msg1']))
                          {
                            echo $_GET['msg1'];
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
              <li class="breadcrumb-item"><a href="quiz.php?mess=Quiz Saved Successsfully"><button class='btn btn-success' >Save</button></a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
                <!-- Main content -->
    <section class="content">

    <?php
                        include '../db.php';
                        if (isset($_GET['edit'])):?>
                    <?php
                        $id=$_GET['edit'];
                        $sql = "SELECT*FROM quiz where id=$id";
                        $result = $con->query($sql);
                        if ($result->num_rows > 0): ?>
                      <?php  
                      while($row = $result->fetch_assoc()): ?>

 <div class="container-fluid">
                  <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                      <!-- jquery validation -->
                      <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Edit Quiz Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" id="quickForm" method='post' action="valid.php">
                        <?php
                        $class=$row['class'];
                        $subject=$row['subject'];
                        $medium=$row['medium']; 
                        ?>
                        <input type='hidden' name='id' value='<?php echo $row["id"]; ?>'>
                        <input type='hidden' name='edit' value='<?php echo $_GET["edit"]; ?>'>
                          <div class="card-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Title</label>
                              <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="title" value='<?php echo $row["title"]; ?>'>
                            </div>
                            <div class="form-row">
                                 <div class="col form-group">
                                    <label>Class</label>
                                    <select class="form-control" name='class' >
                                      <option value='<?php echo $row["class"]; ?>'><?php echo $row["class"]; ?></option>
                                      <option value='class-5'>Class-5</option>
                                      <option value='class-6'>Class-6</option>
                                      <option value='class-7'>Class-7</option>
                                      <option value='class-8'>Class-8</option>
                                      <option value='class-9'>Class-9</option>
                                      <option value='class-10'>Class-10</option>
                                    </select>
                                  </div>
                                  <div class="col form-group">
                                    <label>Subject</label>
                                    <select class="form-control" name='subject' >
                                      <option value='<?php echo $row["subject"]; ?>'><?php echo $row["subject"]; ?></option>
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
                            </div>
                            <div class="form-row">
                                 <div class="col form-group">
                                    <label>Medium</label>
                                    <select class="form-control" name='medium' >
                                      <option value='<?php echo $row["medium"]; ?>'><?php echo $row["medium"]; ?></option>
                                      <option value='english'>English</option>
                                      <option value='telugu'>Telugu</option>
                                      <option value='urdu'>Urdu</option>
                                    </select>
                                  </div>
                                  <div class="col form-group">
                                    <label for="exampleInputEmail1">Time</label>
                                    <input type="number" name="timer" class="form-control" id="exampleInputEmail1" placeholder="title" value=<?php echo $row["time"]; ?>>
                                  </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name='update'>Update</button>
                            </div>
                    <?php endwhile ?>
                    <?php endif ?>
                    <?php endif ?>
                    
                          </div>
                          <!-- /.card-body -->
                        </form>

                      </div>
                      <!-- /.card -->
                      </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <!--/.col (right) -->
                  </div>
                  <!-- /.row -->
    

 



</section>
<section class="content">
  <div class="col-md-12">
            <div class="card-header">
                <h4>
                  <i class="fas fa-bullhorn"></i>
                  <b><u>Questions</u></b>
                </h4><br>
                <a href='multi1.php?quiz=<?php echo $_GET["edit"]; ?>' ><button class='btn btn-info'>Question Bank</button></a><br><br>
                  <a href='addquestion1.php?quiz=<?php echo $_GET["edit"] ?>,<?php echo $class ?>,<?php echo $subject ?>,<?php echo $medium ?>' ><button class='btn btn-primary'>Add New Question</button></a>
              </div>
            <table id="example2" class="table table-bordered table-hover">
            <?php
                        include '../db.php';
                        $quiz_id=$_GET['edit'];
                        $sql2="select *from quiz_questions where quiz_id=$quiz_id order by id desc";
                        $co=0;
                        $r1= $con->query($sql2);
                        if ($r1->num_rows > 0): ?>
                        <?php  
                      while($row2 = $r1->fetch_assoc()): ?>
                      <?php
                      $i=$row2['ques_id'];
                        $sql="SELECT * FROM question where id=$i";
                        $result = $con->query($sql);
                        if ($result->num_rows > 0): ?>
                <tbody>
                <?php  
                      while($row = $result->fetch_assoc()):
                        $co=$co+1; ?>
                <tr>
                  <td>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="callout callout-info">
                          <h5><b><u>Question-<?php echo $co;?></u></b></h5>
                          <h5><?php echo $row['question']; ?></h5>
                          <?php
                          include '../db.php';
                          $id=$row['id'];
                          $sql1 = "select * from option where ques_id=$id";
                          $result1 = $con->query($sql1);
                          if ($result1->num_rows > 0):?>
                          <h5><b><u>Options</u></b></h5>
                          <?php
                            while($row1 = $result1->fetch_assoc()): ?>
                            <h6><?php echo $row1['option'];?></h6>
                            <?php endwhile ?>
                            <?php endif ?>
                            <a href="editquestion1.php?id=<?php echo $row['id'];?>,<?php echo $_GET['edit'];?>"><button class='btn btn-primary'>Edit</button></a>
                                </a>
                            <a href="valid.php?delete=<?php echo $row['id'];?>,<?php echo $_GET['edit'];?>"><button class='btn btn-danger'>DELETE</button></a>
                                </a> 
                        </div>
                      </div>
                    </td>
                </tr>
                <?php endwhile ?>
                </tbody>
                <?php endif ?>
                <?php endwhile ?>
                <?php endif ?>
              </table>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
</section>
<div align="center">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-6002078647584025"
     data-ad-slot="8154028515"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div>


</div>
  
</body>
</html>
<script>
$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});
</script>
<?php ob_end_flush();
?>