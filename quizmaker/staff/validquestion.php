<?php

	include '../db.php';

	if (isset($_POST["submit"]))
	{
		$question = $_POST["question"];
		$class = $_POST["class"];
		$subject = $_POST["subject"];
		$medium = $_POST["medium"];
		$sql = "INSERT INTO question (question,class,subject,medium) VALUES ('$question','$class','$subject','$medium')";
		mysqli_query($con, $sql);
		$invoiceId = mysqli_insert_id($con);

		for ($a = 0; $a < count($_POST["name"]); $a++)
		{
			$sql = "INSERT INTO option (ques_id,option,is_correct) VALUES ('$invoiceId', '" . $_POST["name"][$a] . "', '" . $_POST["answer"][$a] . "')";
			mysqli_query($con, $sql);
		}

		header("location:multi.php");
	}
	if (isset($_POST["submit1"]))
	{
		$question = $_POST["question"];
		$quiz = $_POST["quiz"];
		$class=$_POST['class'];
		$subject=$_POST['subject'];
		$medium=$_POST['medium'];
		$sql = "INSERT INTO question (question,class,subject,medium) VALUES ('$question','$class','$subject','$medium')";
		mysqli_query($con, $sql);
		$invoiceId = mysqli_insert_id($con);

		for ($a = 0; $a < count($_POST["name"]); $a++)
		{
			$sql = "INSERT INTO option (ques_id,option,is_correct) VALUES ('$invoiceId', '" . strip_tags($_POST["name"][$a] , '<img>'). "', '" . $_POST["answer"][$a] . "')";
			mysqli_query($con, $sql);
		}
		$sql1="INSERT INTO quiz_questions(quiz_id,ques_id) VALUES ('$quiz','$invoiceId')";
   		$con->query($sql1);

		header("location:editquiz.php?edit=$quiz &msg1=Success ! Question Added Successfully");
	}



?>