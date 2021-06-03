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
            <h1>Question Bank</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="createquiz.php">Home</a></li>
              <li class="breadcrumb-item active">Question Bank</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
                <!-- Main content -->
    <section class="content">
  <div class="col-md-12">

            <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-bullhorn"></i>
                  Questions 
                </h3>
                <br><br><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Filter Subject</button><br><br>
                <a href='code.php?quiz=<?php echo $_GET["quiz"]; ?>' ><button class='btn btn-primary'>Add Quiz</button></a>
              </div>
            <table id="example2" class="table table-bordered table-hover">
            <?php
                        include '../db.php';
                        if(isset($_POST['filter'])){
                          $class=$_POST['class'];
                          $sub=$_POST['subject'];
                          $sql="SELECT * FROM question where class='$class' and subject='$sub' ";
                          }
                          else{
                            $sql="SELECT * FROM question ORDER BY id DESC";
                          }
                        $result = $con->query($sql);
                        if ($result->num_rows > 0): ?>
                <tbody>
                <?php  
                      while($row = $result->fetch_assoc()): ?>
                <tr>
                <td><input type="checkbox" onclick="toggleCheck(this)" value="<?php echo $row['id']?>" <?php echo $row['visible1']==1 ? "checked": ""?>></td>
                  <td>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="callout callout-info">
                        <h5><b><u>Question</u></b></h5>
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
                          </p>
                        </div>
                      </div>
                    </td>
                </tr>
                <?php endwhile ?>
                </tbody>
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
<div class="container">


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
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
                    <a href='multi.php' ><button class='btn btn-danger'>Clear Filter</button></a>
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Filter</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form role="form" id="quickForm"method='post' action="multi.php">
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
                                  <option>Select Subject</option>
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
</div>


  
</div>
  <!-- /.content-wrapper -->

</body>

<script>

function toggleCheck(box){
   var id=$(box).attr("value");

   if($(box).prop("checked")==true){
     var visible=1;
   }
   else{
     var visible=0;
   }
   var data={
          "search_data":1,
          "id":id,
          "visible1":visible
   };
   $.ajax({
     type:"post",
     url:"code.php",
     data:data,
   });
  
}
</script>
</html>
<?php ob_end_flush();
?>