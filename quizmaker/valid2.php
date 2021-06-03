<?php
session_start();
include 'db.php';
$fname=$_POST['fname'];
$email=$_POST['email'];
$district=$_POST['district'];
$mandal=$_POST['mandal'];
$school=$_POST['school'];
$id=$_POST['id'];
$sql3="select*from dist where id=$district";
$result3 = $con->query($sql3);
$row3 = $result3->fetch_assoc();
$dname=$row3['d_name'];
$sql1="select*from mandal where id=$mandal";
$result1 = $con->query($sql1);
$row1 = $result1->fetch_assoc();
$mname=$row1['m_name'];
$sql2="select*from school where id=$school";
$result2 = $con->query($sql2);
$row2 = $result2->fetch_assoc();
$sname=$row2['s_name'];
$sql="INSERT into users (firstname,email,district,mandal,school) values ('$fname','$email','$dname','$mname','$sname')";
$res=mysqli_query($con,$sql);
if($res)
{
    $invoiceId = mysqli_insert_id($con);
    $_SESSION['id']=$invoiceId;
    header("location:takequiz.php?id=$id");
}

?>