<?php
include 'db.php';
if(isset($_POST['next1'])){
        $e=$_POST['email'];    
        $s=$_POST['security'];
        $ans=$_POST['sans'];
        $sql="select * from users where email='$e' and sques='$s' and  sans='$ans'";
        $res=$con->query($sql);
        $row =$res->num_rows;
        if($row>0)
        {
            header("location:./next1.php?id=$e");
        }
        else{
            header("location:./fgot.php");
        }
}

if(isset($_POST['reset'])){
    $e=$_POST['email'];    
    $s1=$_POST['password'];
    $s2=$_POST['cpassword'];
    if($s1==$s2){
    $sql="UPDATE users SET password='$s1' WHERE email='$e'";
    $res=mysqli_query($con,$sql);
    if($res==True){
        header("location:./login.php");
    }
    }
}

?>

