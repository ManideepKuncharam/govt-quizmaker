<?php
session_start();
 include "../db.php";

 if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $code=$_POST['code'];
    $id=$_POST['user'];    
    $sql="INSERT INTO quiz (title,code,user_id) VALUES('$title','$code','$user')";
    if ($con->query($sql) == TRUE) 
    {
      header('location:createquiz.php?message=success');
    } 
    else 
    {
      header('location:createquiz.php?message=not');
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


if(isset($_GET['delete']))
{
	$id=$_GET['delete'];
    $sql="DELETE FROM question WHERE id=$id";
    if ($con->query($sql) == TRUE) 
    {
        header("location:multi.php");
        exit();
    } 
    else 
    {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
}

if(isset($_GET['delete2']))
{
	$id=$_GET['delete2'];
    $sql="DELETE FROM users WHERE id=$id";
    if ($con->query($sql) == TRUE) 
    {
        header("location:staff.php?val=Success ! Deleted Sucessfully");
        exit();
    } 
    else 
    {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
}





if(isset($_POST['update']))
{
    $title=$_POST['title'];
    $id3=$_POST['id'];
    $edit=$_POST['edit'];
    $sql="UPDATE quiz SET title= '$title' WHERE id=$id3";
    if ($con->query($sql) == TRUE) 
    {
        $message="success";
        header("location:editquiz.php?edit=$edit");
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
        header("location:quiz.php");
        exit();
    } 
    else 
    {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
}

if(isset($_GET['del']))
{
    $id=$_GET['del'];
    $sql="DELETE FROM description WHERE id=$id";
    if ($con->query($sql) == TRUE) 
    {
        header("location:comment.php?val5=Success ! Deleted Successfully");
        exit();
    } 
    else 
    {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
}

if(isset($_GET['del1']))
{
    $id=$_GET['del1'];
    $sql="DELETE FROM contact WHERE id=$id";
    if ($con->query($sql) == TRUE) 
    {
        header("location:contact.php?val5=Success ! Deleted Successfully");
        exit();
    } 
    else 
    {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
}

if(isset($_GET['del3']))
{
    $id=$_GET['del3'];
    $sql="DELETE FROM quiz WHERE id=$id";
    if ($con->query($sql) == TRUE) 
    {
        header("location:quiz.php?val6=Success ! Deleted Quiz Successfully");
        exit();
    } 
    else 
    {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
}

?>