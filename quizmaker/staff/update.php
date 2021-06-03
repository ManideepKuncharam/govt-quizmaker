<?php

	include '../db.php';

	if (isset($_POST["update"]))
	{
        $id=$_POST['id'];
		$question = $_POST["question"];
		$class = $_POST["class"];
        $subject = $_POST["subject"];
        $edit=$_POST['edit'];
        $sql= "UPDATE question SET question='$question',class='$class',subject='$subject' WHERE id=$id";
		mysqli_query($con, $sql);

		for ($a = 0; $a < count($_POST["editid"]); $a++)
		{
			$sql = "UPDATE option SET option='" . $_POST["edititemName"][$a] . "',is_correct='" . $_POST["edititemQuantity"][$a] . "' where id='" . $_POST["editid"][$a] . "'" ;
			mysqli_query($con, $sql);
		}

		for ($a = 0; $a < count($_POST["name"]); $a++)
		{
			$sql = "INSERT INTO option (ques_id,option,is_correct) VALUES ('$id', '" . $_POST["name"][$a] . "', '" . $_POST["answer"][$a] . "')";
			mysqli_query($con, $sql);
		}

		header("location:editquiz.php?edit=$edit &msg3=Question Updated Sucessfully");
	}


	
	if(isset($_POST['delete']))
{
	$id=$_POST['option_id'];
    $id1=$_POST['ques_id'];
    $edit=$_POST['edit'];
    $sql="DELETE FROM option WHERE id=$id";
    if ($con->query($sql) == TRUE) 
    {
        header("location:editquestion1.php?id=$id1,$edit");
        exit();
    } 
    else 
    {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>
