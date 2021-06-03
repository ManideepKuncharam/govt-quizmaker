<?php

	include '../db.php';

	if (isset($_POST["update"]))
	{
        $id=$_POST['id1'];
		$question = $_POST["question"];
		$class = $_POST["class"];
		$subject = $_POST["subject"];
		$medium = $_POST["medium"];
        $sql= "UPDATE question SET question='$question',class='$class',subject='$subject',medium='$medium' WHERE id=$id";
		mysqli_query($con, $sql);

		for ($a = 0; $a < count($_POST["editid"]); $a++)
		{
			$sql = "UPDATE option SET option='" . $_POST["edititemName"][$a] . "',is_correct='" . $_POST["edititemQuantity"][$a] . "' where id='" . $_POST["editid"][$a] . "'" ;
			mysqli_query($con, $sql);
		}

		for ($a = 0; $a < count($_POST["name"]); $a++)
		{
			$sql = "INSERT INTO option (ques_id,option,is_correct) VALUES ('$id', '" . strip_tags($_POST["name"][$a] , '<img>') . "', '" . $_POST["answer"][$a] . "')";
			mysqli_query($con, $sql);
		}

		header("location:multi.php?val3=Sucess! Question Updated sucessfully");
	}


	
if(isset($_GET['delete']))
{    
	$value = explode(",", $_GET["delete"]);
	$id=$value[0];
	$id1=$value[1];
    $sql="DELETE FROM option WHERE id=$id";
    if ($con->query($sql) == TRUE) 
    {
        header("location:editquestion.php?id=$id1");
        exit();
    } 
    else 
    {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>
