<?php
include '../db.php';
include 'header.php';
if(isset($_POST['pass'])){
    $p1=$_POST['password1'];
    $p2=$_POST['password2'];
    $id=$_SESSION['id'];
    if($p1==$p2)
    {
        
        $sql="UPDATE users SET password='$p1' where id=$id";

    }
}
?>