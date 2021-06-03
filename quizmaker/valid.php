<?php
session_start();
include 'db.php';
$un=mysqli_real_escape_string($con,$_POST['email']);
$pass=mysqli_real_escape_string($con,$_POST['password']);
$sql="select * from users where email='$un' && password='$pass'";
$res=mysqli_query($con,$sql);
$rows=mysqli_num_rows($res);
$ans=mysqli_fetch_assoc($res);
$name=$ans['firstname'];
//echo $rows;
if($rows==0)
{
    header("Location:./login.php?id=Invalid Credentials");
}
 else if($ans['type']=='admin')
 {
        $_SESSION['id']=$ans['id'];
        $_SESSION['email']=$un;
        $_SESSION['firstname']=$name;
        header("location:./admin/dash.php");
}
    else 
{
        $_SESSION['id']=$ans['id'];
        $_SESSION['email']=$un;
        $_SESSION['firstname']=$name;
        header("location:./staff/dashboard.php");
}
?>

