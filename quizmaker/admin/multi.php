<?php 
ob_start();
include("header.php");
if(!isset($_SESSION['id']))
{
  header("Location:../login.php");
}
?>
<style>
.questions img,iframe{
  width:150px !important;
  height:100px !important;
}
</style>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:white;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-12 col-sm-3">
            <h1>Question Bank</h1>
            <?php  if(isset($_GET['val3']))
                            {
                              ?>
            
            <div class="float-center">
            <div class="alert alert-success" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong> <?php  if(isset($_GET['val3']))
                            {
                            echo $_GET['val3'];
                            } ?>
                            </strong>
            </div>
            </div>
          <?php
        } ?>
        <?php  if(isset($_GET['msg7']))
                  {
                    ?>
            
            <div class="float-center">
            <div class="alert alert-success" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong> <?php  if(isset($_GET['msg7']))
                            {
                            echo $_GET['msg7'];
                            } ?>
                            </strong>
            </div>
            </div>
          <?php
        } ?>
         <?php  if(isset($_GET['msg8']))
                  {
                    ?>
            
            <div class="float-center">
            <div class="alert alert-danger" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong> <?php  if(isset($_GET['msg8']))
                            {
                            echo $_GET['msg8'];
                            } ?>
                            </strong>
            </div>
            </div>
          <?php
        } ?>
                    <?php  if(isset($_GET['msg6']))
                            {
                              ?>
            
            <div class="float-center">
            <div class="alert alert-danger" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong> <?php  if(isset($_GET['msg6']))
                            {
                            echo $_GET['msg6'];
                            } ?>
                            </strong>
            </div>
            </div>
          <?php
        } ?>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->

    <!-- Main content -->
                <!-- Main content -->
    <section class="content">
  <div class="col-md-12 col-sm-3 ">
  <a href='addquestion.php' ><button class='btn btn-success'>New Question</button></a><br><br>
            
            <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-bullhorn"></i>
                  Questions <br><br>
                  
                  <form action="code.php" method="POST">
                  <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th><button type="submit" name="delete" class="btn btn-danger">DELETE</button></th>
                      <th><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"> Filter</button></th>
                      <th><a href='multi.php'><button type="button" class='btn btn-info'>Clear Filter</button></a></th>
                    </tr>
                  </thead>
                </table>                
                </form>
                </h3>
                
              </div>
              <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Select</th>
                  <th>Question</th>
                  <th>Class</th>
                  <th>Subject</th>
                  <th>Medium</th>
                  <th>Edit</th>
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
                          $sql="SELECT * FROM question where class='$class' and subject='$sub' and medium='$med' ";
                          }
                          else{
                            $sql="SELECT * FROM question ORDER BY id DESC";
                          }
                        $result = $con->query($sql);
                        if ($result->num_rows > 0): ?>
                         <?php  
                      while($row = $result->fetch_assoc()): ?>
                <tr>
                  <td><input type="checkbox" id="check" onclick="toggleCheck(this)" value="<?php echo $row['id']?>" <?php echo $row['visible']==1 ? "checked": ""?>></td>
                  <td class="questions"><?php echo $row['question']; ?></td>
                  <td class="questions"><?php echo $row['class']; ?></td>
                  <td class="questions"><?php echo $row['subject']; ?></td>
                  <td class="questions"><?php echo $row['medium']; ?></td>
                  <td><a href='editquestion.php?id=<?php echo $row["id"]; ?>' ><button class='btn btn-primary'>Edit</button></a></td>
                  <td><a href='valid.php?delete=<?php echo $row["id"];?>' ><button class='btn btn-danger'>Delete</button></a></td>
                </tr>
                <?php endwhile ?>
              </tbody>
              <?php endif ?>
            </table>
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
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Filter</h4>
      </div>
      <div class="modal-body">
                  <div class="container-fluid">
                <div class="row">
                  <!-- left column -->
                  <div class="col-md-12">
                    <!-- jquery validation -->
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
          "visible":visible
   };
   $.ajax({
     type:"post",
     url:"code.php",
     data:data,
     
   });
  
}
</script>
<script>
$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});
</script>
</html>
<?php ob_end_flush();
?>