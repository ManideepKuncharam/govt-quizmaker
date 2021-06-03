<?php 
ob_start();
include("header.php");
if(!isset($_SESSION['id']))
{
  header("Location:../login.php");
}
?>
 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color:white;" >
<?php
include '../db.php';
$sql="select * from users where type='student'";
$result=$con->query($sql);
$row =$result->num_rows;

$sql1="select * from quiz";
$result1=$con->query($sql1);
$row1 = $result1->num_rows;

$sql2="select * from users where type!='student' and type!='admin'";
$result2=$con->query($sql2);
$row2 =$result2->num_rows; ?>

<?php
include '../db.php';


$sql10="select * from question where class='class-10'";
$result10=$con->query($sql10);
$class10=$result10->num_rows;

$sql5="select * from question where class='class-5'";
$result5=$con->query($sql5);
$class5=$result5->num_rows;

$sql6="select * from question where class='class-6'";
$result6=$con->query($sql6);
$class6=$result6->num_rows; 

$sql7="select * from question where class='class-7'";
$result7=$con->query($sql7);
$class7=$result7->num_rows;

$sql8="select * from question where class='class-8'";
$result8=$con->query($sql8);
$class8=$result8->num_rows;

$sql9="select * from question where class='class-9'";
$result9=$con->query($sql9);
$class9=$result9->num_rows; 

$sql12="select * from question where subject='telugu'";
$result12=$con->query($sql12);
$telugu=$result12->num_rows;

$sql13="select * from question where subject='hindi'";
$result13=$con->query($sql13);
$hindi=$result13->num_rows;

$sql14="select * from question where subject='english'";
$result14=$con->query($sql14);
$english=$result14->num_rows; 

$sql15="select * from question where subject='maths'";
$result15=$con->query($sql15);
$maths=$result15->num_rows;

$sql16="select * from question where subject='science'";
$result16=$con->query($sql16);
$science=$result16->num_rows;

$sql17="select * from question where subject='social'";
$result17=$con->query($sql17);
$social=$result17->num_rows;


$sql18="select * from question";
$result18=$con->query($sql18);
$total=$result18->num_rows; 

$sql19="select * from question where medium='english'";
$result19=$con->query($sql19);
$menglish=$result19->num_rows;

$sql20="select * from question where medium='telugu'";
$result20=$con->query($sql20);
$mtelugu=$result20->num_rows;

$sql21="select * from question where medium='urdu'";
$result21=$con->query($sql21);
$murdu=$result21->num_rows;

?>

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard </h1>
            <?php  if(isset($_GET['mess']))
                            {
                              ?>
            
            <div class="float-center">
            <div class="alert alert-success" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong> <?php  if(isset($_GET['mess']))
                            {
                            echo $_GET['mess'];
                            } ?>
                            </strong>
            </div>
            </div>
          <?php
        } ?>
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
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $row2; ?></h3>

                <p>Staff</p>
              </div>
              <div class="icon">
                <i class="ion ion-man "></i>
              </div>
              </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $row; ?></h3>

                <p>Students</p>
              </div>
              <div class="icon">
                <i class="ion ion-woman"></i>
              </div>
              </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $row1; ?></h3>

                <p>No.of Quizs created</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-book"></i>
              </div>
               </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $row1; ?></h3>

                <p>No.of Quizs conducted</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
               </div>
          </div>
          <!-- ./col -->
        </div>
</div>
</section>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Question Bank</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $total; ?></h3>

                <p>Total No.of Questions</p>
              </div>
              <div class="icon">
                <i class="ion  ion-folder"></i>
              </div>
              </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $menglish; ?></h3>

                <p>English Medium Questions</p>
              </div>
              <div class="icon">
                <i class="ion  ion-folder"></i>
              </div>
              </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $mtelugu; ?></h3>

                <p>Telugu Medium Questions</p>
              </div>
              <div class="icon">
                <i class="ion  ion-folder"></i>
              </div>
               </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $murdu; ?></h3>

                <p>Urdu Medium Questions</p>
              </div>
              <div class="icon">
                <i class="ion  ion-folder"></i>
              </div>
               </div>
          </div>
          <!-- ./col -->
        </div>
</div>
</section>
    <!-- Content Header (Page header) -->
 

    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Class Wise No.of Questions</h3>

                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Subject Wise No.of Questions</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  </div>
              </div>
              <div class="card-body">
                <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </div>
    
     
    <!-- Main content -->

    <!-- /.content -->
  </div>
</div>
 
</body>

</html>

<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

 

    
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var l=[]
    l.push(<?php echo $class5; ?>)
    l.push(<?php echo $class6; ?>)
    l.push(<?php echo $class7; ?>)
    l.push(<?php echo $class8; ?>)
    l.push(<?php echo $class9; ?>)
    l.push(<?php echo $class10; ?>)
    var donutData        = {
      labels: [
          'Class-5', 
          'Class-6', 
          'Class-7', 
          'Class-8', 
          'Class-9', 
          'Class-10',
      ],
      datasets: [
        {
          data: l,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions      
    })



    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var j=[]
    j.push(<?php echo $telugu; ?>)
    j.push(<?php echo $hindi; ?>)
    j.push(<?php echo $english; ?>)
    j.push(<?php echo $maths; ?>)
    j.push(<?php echo $science; ?>)
    j.push(<?php echo $social; ?>)
    var pieData        = {
      labels: [
          'Telugu', 
          'Hindi',
          'English', 
          'Maths', 
          'Science', 
          'Social', 
      ],
      datasets: [
        {
          data: j,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })
    
  })
</script>

<script>
$("#success-alert").fadeTo(1000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});
</script>


<?php ob_end_flush();
?>
