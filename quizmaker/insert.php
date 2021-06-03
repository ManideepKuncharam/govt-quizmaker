<?php

	include 'db.php';

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

		
    }
    ?>