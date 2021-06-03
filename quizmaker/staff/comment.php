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
            <h1>Queries</h1>
            <?php  if(isset($_GET['id1']))
                            {
                              ?>
            
            <div class="float-center">
            <div class="alert alert-success" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong> <?php  if(isset($_GET['id1']))
                            {
                            echo $_GET['id1'];
                            } ?>
                            </strong>
            </div>
            </div>
          <?php
        } ?>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="createquiz.php">Home</a></li>
              <li class="breadcrumb-item active">Queries</li>
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
                <h3 class="card-title">Queries</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method='post' action="comment1.php">
                <div class="card-body">
                  <div class="form-group">
                  <input type='hidden' name='user' value="<?php echo $_SESSION['id'];?>">
                    <label for="exampleInputEmail1">Email -ID</label>
                    <input type="email" name="cmail" class="form-control" id="exampleInputEmail1" placeholder="Email-ID">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Query Here</label>
                    <textarea name="comment" class="text"></textarea>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success" name='submit'>Post Query</button>
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
</html>

<script>
$("#success-alert").fadeTo(1000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});
</script>
<?php ob_end_flush();
?>
