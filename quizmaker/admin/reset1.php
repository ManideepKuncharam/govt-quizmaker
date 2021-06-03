<?php 
ob_start();
include("header.php");
if(!isset($_SESSION['id']))
{
  header("Location:../login.php");
}
include ('../db.php');
if(isset($_POST['reset'])){  
    $id=$_SESSION['id'];
    $s1=$_POST['password'];
    $s2=$_POST['cpassword'];
    if($s1==$s2){
    $sql="UPDATE users SET password='$s1' WHERE id=$id";
    $res=mysqli_query($con,$sql);
    if($res==True){
        header("location:./dash.php?mess=Success ! Password Updated Sucessfully");
    }
    }
}

?>