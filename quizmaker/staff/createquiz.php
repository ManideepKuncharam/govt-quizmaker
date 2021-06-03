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
            <h1>Quiz</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="createquiz.php">Home</a></li>
              <li class="breadcrumb-item active">Create Quiz</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Quiz</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method='post' action="valid.php">
                <div class="card-body">
                  <div class="form-group">
                  <input type='hidden' name='user' value="<?php echo $_SESSION['id'];?>">
                    <label for="exampleInputEmail1">QUIZ TITLE</label>
                    <input type="text" name="title" required class="form-control" id="exampleInputEmail1" placeholder="Title">
                  </div>
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
                    <select class="form-control" name='medium' >
                      <option>Select Subject</option>
                      <option value='english'>English</option>
                      <option value='telugu'>Telugu</option>
                      <option value='urdu'>Urdu</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Timer</label>
                    <input type="number" name="timer" required  class="form-control" id="exampleInputEmail1" placeholder="Please Enter time in Minutes">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name='submit'>Create New Quiz</button>
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
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</html>
<?php ob_end_flush();
?>
