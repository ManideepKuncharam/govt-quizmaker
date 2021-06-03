<?php
include 'db.php';
session_start();
if(!isset($_SESSION['id']))
{
  header("Location:list.php");
}
$f=$_SESSION['id'];
if(isset($_POST['answer'])){
    $d=0;
    $id=$_POST['id'];
    $b=$_POST['answer'];
    $sql="SELECT * FROM quiz_questions where quiz_id=$id";
    $result=$con->query($sql);
    while($row=$result->fetch_assoc()){
        $a=$row['ques_id'];
        $c= $b[$a];
        if ($c != null){
        $sql1 = "SELECT*FROM option where id=$c";
        $result1=mysqli_query($con, $sql1);
        $row1 = $result1->fetch_assoc();
        $x=$row1['is_correct'];
        if($row1['is_correct']=='right'){
         $d=$d+1;
        }

        $sql2="INSERT INTO response (user_id,quiz_id,ques_id,option_id,is_correct) values('$f','$id','$a','$c','$x')";
        $result2=$con->query($sql2);
        
    }
          
    }
    $sql4="select*from quiz where id=$id";
    $result4=$con->query($sql4);
    $row4 = $result4->fetch_assoc();
    $title=$row4['title'];
    $s="SELECT count(ques_id) FROM quiz_questions where quiz_id=$id";
    $r=$con->query($s);
    $ro=$r->fetch_assoc();
    $d=($d*100)/$ro['count(ques_id)'];
    if($d>35)
    {
        $y="pass";
    }
    else{
        $y="fail";
    }
    $sql3="INSERT INTO results (user_id,quiz_id,title,marks,res) values ('$f','$id','$title','$d','$y')";
    $result3=$con->query($sql3);
    if ($result3==True){
        header('location:results.php?m=$d & val7=Success! Quiz Submitted Successfully');
    }
   
}
else{
    $id=$_POST['id'];
    $sql4="select*from quiz where id=$id";
    $result4=$con->query($sql4);
    $row4 = $result4->fetch_assoc();
    $title=$row4['title'];
    $d=0;
    $sql3="INSERT INTO results (user_id,quiz_id,title,marks) values ('$f','$id','$title','$d')";
    $result3=$con->query($sql3);
    if ($result3==True){
        header('location:list.php');
    }
}
ob_end_flush();
?>