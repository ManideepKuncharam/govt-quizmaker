<?php 
ob_start();
include("header.php");
if(!isset($_SESSION['id']))
{
  header("Location:../login.php");
}
?>
<style>
#fieldGroupTemplate {
  display: none;
}
</style>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"style="background-color:white">
    <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Questions</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="createquiz.php">Home</a></li>
                  <li class="breadcrumb-item active">Edit Questions</li>
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
              <h3 class="card-title">Edit Question</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <?php 
            include '../db.php';
            $value = explode(",", $_GET["id"]);
            $id=$value[0];
            $edit=$value[1];
            $sql="select * from question where id=$id";
            $result = $con->query($sql);
            if ($result->num_rows > 0): ?>
          <?php  
          while($row = $result->fetch_assoc()): ?>
            <div class="form-group">
          <form method="post" action="update.php">
            <input type='hidden' name='id'  value=<?php echo $row['id']; ?>>
            <input type='hidden' name='edit'  value=<?php echo $edit; ?>>
            <div class="form-group">
                                <label>Class</label>
                                <select class="form-control" name='class' >
                                  <option value="<?php echo $row['class']; ?>"><?php echo $row['class']; ?></option>
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
                                  <option value="<?php echo $row['subject']; ?>"><?php echo $row['subject']; ?></option>
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
                    <label>Question</label>
                    <textarea name="question" class="text"><?php echo $row['question']; ?></textarea>
                    <?php
                    $ques_id=$row['id'];
                    $sql1="select * from option where ques_id=$ques_id";
                    $result1 = $con->query($sql1);
                    if ($result1->num_rows > 0): ?>
                    <br><label>Options</label>
                  <?php   while($row1 = $result1->fetch_assoc()): ?>
                              <div class="row fieldGroup">
                           <div class="col-md-10  ">
                             <div class="form-group">
                                 <select class="form-control" name='edititemQuantity[]' >
                                 <option value="<?php echo $row1['is_correct']; ?>" > <?php echo $row1["is_correct"]; ?> </option>
                                   <option value='Wrong'>Wrong</option>
                                   <option value='right'>Right</option>
                                 </select>
                             </div>
                           </div>
                           <input type='hidden' name='editid[]' readonly value='<?php echo $row1["id"]; ?>'></td>
                           <div class="col-md-2  ">
                           <a href='updatequestion.php?delete=<?php echo $row1['id']; ?>,<?php echo $row['id']; ?>,<?php echo $edit; ?>'
                                        <button class="btn btn-danger" name='delete'>Delete</button></a>
                           </div>
                           <div class="col-md-12  ">
                             <div class="form-group">
                             <textarea name='edititemName[]' class="text"><?php echo $row1["option"]; ?></textarea>
                             </div>
                           </div>
                         </div>
                    <?php endwhile ?>
                  <?php endif ?>
                         <div class="row fieldGroup">
                           <div class="col-md-2  ">
                             <br><a href="javascript:void(0)" class="btn btn-success addMore">
                               <span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add More Options
                             </a><br><br>
                           </div>
                         </div>

                         <button class='btn btn-primary' name='update'>Update</button>
                       </form>
                       <?php endwhile ?>
              <?php endif ?>

                     <div class="row" id="fieldGroupTemplate">
                       <div class="col-md-10  ">
                         <div class="form-group floating-label">
                                 <select class="form-control" name='answer[]' >
                                   <option value='Wrong'>Wrong</option>
                                   <option value='right'>Right</option>
                                 </select>
                         </div>
                       </div>
                       <div class="col-md-2  ">
                         <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</a>
                       </div>
                       <div class="col-sm-12 ">
                         <div class="form-group">
                           <textarea name="name[]" class="textarea"></textarea>
                         </div>
                       </div>
                     </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
    <!-- /.content -->
  </div>
 
</div>
  <!-- /.content-wrapper -->

</body>



</html>
<?php ob_end_flush();
?>