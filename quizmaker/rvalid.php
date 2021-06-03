<?php
include 'db.php';
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$pass=$_POST['password1'];
$school=$_POST['school'];
$mandal=$_POST['mandal'];
$district=$_POST['district'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$type=$_POST['type'];
$security=$_POST['security'];
$sans=$_POST['sans'];
$sql="INSERT into users(firstname,lastname,email,type,password,school,mandal,district,mobile,sques,sans) values('$fname','$lname','$email','$type','$pass','$school','$mandal','$district','$mobile','$security','$sans')";
$res=mysqli_query($con,$sql);
if($res)
{
    header("location:./login.php?id1=Registered Sucessfully");
}
else
{
    header("location:./register.php?id2=User Already Exsists");
}
?>