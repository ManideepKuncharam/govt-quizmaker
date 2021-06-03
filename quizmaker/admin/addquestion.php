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
.alert {
  display:inline-block;
}
</style>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:white;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 col-md-6 ">
            <h1>Questions</h1>
            <?php  if(isset($_GET['val']))
                            {
                              ?>
            
            <div class="float-center">
            <div class="alert alert-success" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong> <?php  if(isset($_GET['val']))
                            {
                            echo $_GET['val'];
                            } ?>
                            </strong>
            </div>
            </div>
          <?php
        } ?>
            <?php  if(isset($_GET['val1']))
                            {
                              ?>
            
            <div class="float-center">
            <div class="alert alert-danger" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong> <?php  if(isset($_GET['val1']))
                            {
                            echo $_GET['val1'];
                            } ?>
                            </strong>
            </div>
            </div>
          <?php
        } ?>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
              <li class="breadcrumb-item active">Questions</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
      if (isset($_SESSION['message'])):
    ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">

    <?php
       echo $_SESSION['message'];
       unset($_SESSION['message']);

    ?>
    </div>
    <?php endif ?>
    <!-- Main content -->
                <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
            <div class="card-header">
              <h3 class="card-title">Add Question</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div class="form-group">
                <form name="add_name" id="add_name" method='post' action='validquestion.php'>
                <div class="form-group">
                                <label>Class</label>
                                <select class="form-control" name='class' >
                                  <option >Select Class</option>
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
                              <div class="form-group">
                                <label>Medium</label>
                                <select required class="form-control" name='medium' >
                                  <option>Select Medium</option>
                                  <option value='telugu'>Telugu</option>
                                  <option value='urdu'>Urdu</option>
                                  <option value='english'>English</option>
                                </select>
                              </div>
                              <div class="col-md-12  ">
                                  <div class="form-group">
                                    <h4>Question</h4>
                                    <textarea name="question" class="text" required placeholder="Please Enter Question"></textarea><br>
                                  </div>
                                </div>
                                <div class="col-md-2  ">
                                 
                                  <label for="sectionTitle">Options</label>
                                </div>
                              <div class="row fieldGroup">
                                <div class="col-md-12  ">
                                  <div class="form-group">
                                    
                                      <select class="form-control" name='answer[]' >
                                        <option value='Wrong'>Wrong</option>
                                        <option value='right'>Right</option>
                                      </select>
                                  </div>
                                </div>

                                <div class="col-md-12  ">
                                  <div class="form-group">
                                    <textarea name="name[]" class="text"></textarea><br>
                                  </div>
                                </div>
                              </div>
                              <a href="javascript:void(0)" class="btn btn-success addMore">
                                    <span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add More Options
                                  </a><br><br>
                              <button class='btn btn-primary swalDefaultSuccess' name='submit'>Submit</button>
                            </form>
                          </div>

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
                                <textarea name="name[]" class="textarea"></textarea><br>
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
<script>
$("#success-alert").fadeTo(1000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});
</script>
<?php ob_end_flush();
?>