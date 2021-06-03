<?php 
session_start();
if(!isset($_SESSION['id']))
{
  header("Location:list.php");
}
include("header.php");
?>
<style>
.ques{
position: relative;
bottom: 20px;
}
hr.new4 {
  border: 1px solid black;
}

.opti span,p,h1,h2,h3,h4,h5,h6{
        color:black !important;
        background-color:transparent !important;
}

</style>

<script type="text/javascript">
            function countDown(secs)
            {
        var min=localStorage.getItem('min');
        var sec=localStorage.getItem('sec');
        if(min==null || sec==null){
                min=secs-1;
                sec=59;
                localStorage.setItem('min',min);
                localStorage.setItem('sec',sec);
                document.getElementById('time').innerHTML="Time "+" "+min + ":"+sec;
        }
        var x=setInterval(function(){
        if(min<0){
                localStorage.removeItem('min');
                localStorage.removeItem('sec');
                clearInterval(x);

        }
        else if (min>0){
                if(sec>0){
                        sec=sec-1;
                        if (sec<10){
                                sec="0"+sec;
                        }
                        localStorage.setItem('sec',sec);
                        console.log(sec);
                        document.getElementById('time').innerHTML="Time "+" "+min + ":"+sec;
                }
        
                else if(sec==0){
                        sec=59;
                        min=min-1;
                        localStorage.setItem('min',min);
                        localStorage.setItem('sec',60);
                        console.log(sec)
                        document.getElementById('time').innerHTML="Time "+" "+min + ":"+sec;

                }
            }
                else if (min==0){
                        min=00;
                        if(sec>0){
                           sec=sec-1;
                       localStorage.setItem('sec', sec);
                       document.getElementById('time').innerHTML="Time "+" "+min + ":"+sec;
                               }
                else if(sec==0){
                localStorage.removeItem('min'); 
                localStorage.removeItem('sec'); 
                 document.quiz.submit(); 
                        }

                }
               
        },1000);
     }
        function func(){
        localStorage.removeItem('min'); 
        localStorage.removeItem('sec');  
      }

            </script> 
            
            <style type="text/css"> 
            span { 
                color: #FF00CC;
            }
            </style>
<div class="content-wrapper">
<div class="card card-primary">

        <!-- /.card-header -->
        <!-- form start -->
        <?php
                        include 'db.php';
                        $code=$_GET['id'];
                        $sql4="select * from quiz where id=$code";
                        $result4=$con->query($sql4);
                        $row4 = $result4->fetch_assoc();
                        $sql1="select * from quiz_questions where quiz_id=$code ORDER BY RAND()";
                        $co=0;
                        
                        $result1=$con->query($sql1);
                        $tot=$result1->num_rows;
                    if ($result1->num_rows> 0): ?>
                    <nav class="navbar sticky-top navbar-light bg-info">
                    <div class="card-header">
        <h3 class="card-title" style="color:white !important;">Quiz</h3>
        </div>
                    <?php  
                      while($row1 = $result1->fetch_assoc()): ?>
                    <?php
                        $id=$row1['ques_id'];
                        $co=$co+1;
                        $sql = "SELECT*FROM question where id=$id";
                        $result = $con->query($sql);
                        if ($result->num_rows > 0): ?>
                        
                        <div id="time" style="font-size: 50px; font-style: bold; font-family: Arial;">
                        </div>
                        <div class="times">
                        <script  type="text/javascript">countDown(<?php echo $row4['time']; ?>);</script>
                        </div>
                        </nav>
            <title>Questionnaire</title>
                <form action="evaluate.php" method="post"  name='quiz'>
                <input type="hidden" value="<?php echo $_GET['id'];?>" name="id">
                <div class="card-body">
                <?php  while($row = $result->fetch_assoc()): ?>
                <h4><i class="fas fa-bullhorn"></i> Question <b><?php echo $co; ?></b> of <?php echo $tot; ?></h4>
                <div class='jumbotron bg-light'>
                
                        <div class="form-group">
                        <div class="container">
                                <div class="ques"><h5><b><?php echo $row['question']; ?></b></h5><hr class="new4"></div>
                                </div>
                                <h6><b><u>Options</u></b></h6>
                        </div>
                                <?php
                                include 'db.php';
                                $i=$row['id'];
                                $sql2="select * from option where ques_id=$i ORDER BY RAND()";
                                        $result2=$con->query($sql2);
                                        if ($result2->num_rows> 0): ?>
                                        <?php  
                                        while($row2 = $result2->fetch_assoc()): ?>
                                        <div class="form-check">
                                                 <label class="form-check-label" for="radio1">
                                                 <input type="radio" value="<?php echo $row2['id'];?>" class="form-check-input"  name="answer[<?php echo $row['id'];?>]"><div class="opti"><?php echo $row2['option'];?></div>
                                                </label>
                                        </div>
                                        <?php endwhile;?>
                                        <?php endif;?>   
                </div>
            <?php endwhile;?>
                      
        </div>
        <?php endif;?>
        <?php endwhile;?>
        <?php endif;?> 
                     
        <!-- /.card-body -->

        <div class="card-footer">
           <center> <button type="submit" class="btn btn-primary" onclick="func()" id="quiz" name='quiz'>Submit</button> </center>
        </div>
        </form>
    </div>
</div>
<?php
ob_flush();
?>
    