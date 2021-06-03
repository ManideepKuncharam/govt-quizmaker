<?php
session_start();
 include "../db.php";

 if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $medium=$_POST['medium'];
    $class=$_POST['class'];
    $subject=$_POST['subject'];
    $tmarks=$_POST['tmarks'];
    $pmarks=$_POST['pmarks'];
    $id=$_POST['user'];  
    $timer=$_POST['timer'];   
    $sql="INSERT INTO quiz (title,user_id,class,subject,medium,tmarks,pmarks,time) VALUES ('$title','$id','$class','$subject','$medium','$tmarks','$pmarks','$timer')";
    if ($con->query($sql) == TRUE) 
    {
      $invoiceId = mysqli_insert_id($con);
      header("location:editquiz.php?edit=$invoiceId&msg=Success ! Quiz Created Successfully");
      exit();
    } 
    else{
      header('location:createquiz.php');
    }
}


if(isset($_POST['add'])){
  $quiz=$_POST['quiz'];
  $question=$_POST['question'];
  
  $sql="INSERT INTO quiz_questions (quiz_id,ques_id) VALUES ('$quiz','$question')";
  if ($con->query($sql) == TRUE) 
  {
    header('location:multi.php');
  }
}






if(isset($_POST['update']))
{
    $title=$_POST['title'];
    $id3=$_POST['id'];
    $edit=$_POST['edit'];
    $class=$_POST['class'];
    $subject=$_POST['subject'];
    $medium=$_POST['medium'];
    $timer=$_POST['timer'];
    $sql="UPDATE quiz SET title= '$title',class='$class',subject='$subject',medium='$medium',time='$timer' WHERE id=$id3";
    if ($con->query($sql) == TRUE) 
    {
        $message="success";
        header("location:editquiz.php?edit=$edit &msg5=Success ! Quiz Updated Sucessfully");
        exit();
    } 
    else 
    {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
}


if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="DELETE FROM quiz WHERE id=$id";
    if ($con->query($sql) == TRUE) 
    {
        header('location:quiz.php?msg4=Success ! Deleted Sucessfully');
        exit();
    } 
    else 
    {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
}

if(isset($_GET['delete']))
{
    $value = explode(",", $_GET["delete"]);
    $ques_id=$value[0];
    $quiz_id=$value[1];
    $sql="DELETE FROM quiz_questions WHERE ques_id=$ques_id";
    if ($con->query($sql) == TRUE) 
    {
        header("location:editquiz.php?edit=$quiz_id &msg6=Success ! Deleted Sucessfully");
        exit();
    } 
    else 
    {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>