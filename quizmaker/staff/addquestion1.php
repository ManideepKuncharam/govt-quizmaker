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
  <div class="content-wrapper" style="background-color:white">
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
              <li class="breadcrumb-item active">Questions</li>
              <?php
               if(isset($_GET['val']))
               {
                 echo $_GET['val'];
               }
              
              ?>
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
            <?php 
            $value = explode(",", $_GET["quiz"]);
            $edit=$value[0];
            $class=$value[1];
            $subject=$value[2];
            $medium=$value[3];
            ?>
                <form name="add_name" id="add_name" method='post' action='validquestion.php'>
                <input type='hidden' value=<?php echo $edit; ?> name='quiz'>
                <input type='hidden' value=<?php echo $class; ?> name='class'>
                <input type='hidden' value=<?php echo $subject; ?> name='subject'>
                <input type='hidden' value=<?php echo $medium; ?> name='medium'>
                              <div class="col-md-12  ">
                                  <div class="form-group">
                                    <h4>Question</h4>
                                    <textarea name="question" class="text"></textarea>
                                  </div>
                                </div>
                                <h4>Options</h4>
                         
                                <a href="javascript:void(0)" class="btn btn-success addMore">
                                    <span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add More Options
                                  </a><br><br>
                              <div class="row fieldGroup">
                                <div class="col-md-12">
                                  <div class="form-group">
                                      <select class="form-control" name='answer[]' >
                                        <option value='Wrong'>Wrong</option>
                                        <option value='right'>Right</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-md-12  ">
                                  <div class="form-group">
                                    <textarea name="name[]" class="text"></textarea>
                                  </div>
                                </div>
                              </div>
                              
                              <br><button class='btn btn-primary' name='submit1'>Submit</button>

                            </form>
                          </div>

                          <div class="row" id="fieldGroupTemplate">
                            <div class="col-md-10  ">
                              <br><div class="form-group floating-label">
                                      <select class="form-control" name='answer[]' >
                                        <option value='Wrong'>Wrong</option>
                                        <option value='right'>Right</option>
                                      </select>
                              </div>
                            </div>
                            <div class="col-md-2  ">
                              <br><a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</a>
                            </div>
                            <div class="col-sm-12 ">
                              <div class="form-group">
                                <textarea name="name[]" class="textarea"></textarea>
                              </div>
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