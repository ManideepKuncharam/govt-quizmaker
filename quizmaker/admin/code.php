<?php

include '../db.php';
if(isset($_POST['search_data'])){
    $id=$_POST['id'];
    $visible=$_POST['visible'];
    $sql="UPDATE question SET visible='$visible' where id='$id'";
    $result=$con->query($sql);
}
?>

<?php
include '../db.php';
if(isset($_POST['delete'])){
  $id="1";
  $sql="DELETE FROM question where visible=$id";
  $result=$con->query($sql);
  header("location:multi.php?msg6=Success ! Deleted Questions Sucessfully");
}


?>