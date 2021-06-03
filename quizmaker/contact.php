<?php
 include "db.php";
 if(isset($_POST['comment1'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $comment=$_POST['comment'];
    $sql="INSERT INTO contact (firstname,lastname,email,comment) VALUES ('$fname','$lname','$email','$comment')";
    if ($con->query($sql) == TRUE) 
    {
      header('location:contactus.php?id=Details Submitted Sucessfully');
    }
  }
?>