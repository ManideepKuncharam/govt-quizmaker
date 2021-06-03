<?php 
ob_start();
include("header.php");
if(!isset($_SESSION['id']))
{
  header("Location:../login.php");
}
?>

<div class="content-wrapper" style="background-color:white;" >
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
          <a href="createquiz.php">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h5>Create Quiz</h5>
                <p>Quiz</p>
              </div>

              </div>
              </a>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
          <a href="quiz.php">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h5>Edit Quiz</h5>

                <p>Quiz</p>
              </div>
              </div>
              </a>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
          <a href="multi.php">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h5>Question Bank</h5>

                <p>Quiz</p>
              </div>
               </div>
               </a>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <a href="results.php">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h4>Results</h4>
                <p>Quiz</p>
              </div>
               </div>
              </a> 
          </div>
          <!-- ./col -->
        </div>
</div>
</section>
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
</script>
</div>
</div>
