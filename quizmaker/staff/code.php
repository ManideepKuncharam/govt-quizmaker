<?php

include '../db.php';
if(isset($_POST['search_data'])){
    $id=$_POST['id'];
    $visible=$_POST['visible1'];
    $sql="UPDATE question SET visible1='$visible' where id='$id'";
    $result=$con->query($sql);
}
?>

<?php
include '../db.php';
if(isset($_GET['quiz'])){
  $id="1";
  $quiz_id=$_GET['quiz'];
  $sql="SELECT*FROM question where visible1=$id";
  $result=$con->query($sql);
  while($row=mysqli_fetch_assoc($result))
  {
    $ques_id= $row['id'];
    $sql="INSERT INTO quiz_questions(quiz_id,ques_id) VALUES ('$quiz_id','$ques_id')";
    $con->query($sql);
    $sql1="UPDATE question SET visible1=0 where id='$ques_id'";
    $con->query($sql1);
  
  }
  header("location:editquiz.php?edit=$quiz_id");
}


?>