<?php
session_start();
 include "../db.php";


 if(isset($_POST['submit'])){
    $cmail=$_POST['cmail'];
    $comment=$_POST['comment'];
    
    $sql="INSERT INTO description (email,descri) VALUES ('$cmail','$comment')";
    if ($con->query($sql) == TRUE) 
    {
      header('location:comment.php?id1=Success ! Query Submitted Sucessfully');
    }
  }
?>
  