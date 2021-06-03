<?php
  session_start();
?>
<?php
include 'db.php';
if(!isset($_SESSION['id']))
{
  header("Location:../login.php");
}
?>
<?php
include "db.php";
$i=$_SESSION['id'];
$sql="SELECT * FROM users where id=$i";
$res=$con->query($sql);
$row=mysqli_fetch_assoc($res);
$sri=$row['firstname'];
$sri1=$row['lastname'];
$sri2=$sri.' '.$sri1;
$id=$_GET['id'];
$sql1="SELECT * FROM results where id=$id";
$res1=$con->query($sql1);
$row1=mysqli_fetch_assoc($res1);
$marks=$row1['marks'];
$quiz_id=$row1['quiz_id'];
$title=$row1['title'];
$sql2="SELECT * from quiz where id=$quiz_id ";
$res2=$con->query($sql2);
$row2=mysqli_fetch_assoc($res2);
$staff=$row2['user_id'];
$sql3="SELECT * from users where id=$staff";
$res3=$con->query($sql3);
$row3=mysqli_fetch_assoc($res3);
$fname=$row3['firstname'];
$lname=$row3['lastname'];
$name=$fname.' '.$lname;
$school=$row3['school'];
$mandal=$row3['mandal'];
$currentdate = date("d-m-Y");
?>
<?php 
include('mpdf/vendor/autoload.php');
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
$mpdf->autoScriptToLang = true;
$mpdf->baseScript = 1;
$mpdf->autoLangToFont = true;
$mpdf->SetDefaultBodyCSS('background', "url('img/cer.jpg')");
$mpdf->SetDefaultBodyCSS('background-image-resize', 6);
$html1="<div style='position:absolute; left:720px; top:751px;'><b> $mandal </b></div>";
$html2="<div style='position:absolute; left:450px; top:400px; color:#FF00FF'><h1><center> $sri2 </center></h1></div>";
$html3="<div style='position:absolute; left:400px; top:525px;'><h2><center> $title </center></h2></div>";
$html4="<div style='position:absolute; left:400px; top:732px;'><p> $currentdate </p></div>";
$html5="<div style='position:absolute; left:720px; top:705px;'><b> $name </b></div>";
$html6="<div style='position:absolute; left:720px; top:728px;'><b> $school </b></div>";
$html7="<div style='position:absolute; left:720px; top:645px;'><b> $marks %</b></div>";
$mpdf->WriteHTML($html1);
$mpdf->WriteHTML($html2);
$mpdf->WriteHTML($html3);
$mpdf->WriteHTML($html4);
$mpdf->WriteHTML($html5);
$mpdf->WriteHTML($html6);
$mpdf->WriteHTML($html7);
$mpdf -> output();
?>