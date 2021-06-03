<?php 
include 'db.php';

if (isset($_POST['d_id'])) {
    $id=$_POST['d_id'];
	$query = "SELECT * FROM mandal where d_id=$id";
	$result = $con->query($query);
	if ($result->num_rows > 0 ) {
			echo '<option value="">Select Mandal</option>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<option value='.$row['id'].'>'.$row['m_name'].'</option>';
		 }
	}else{

		echo '<option>No Mandal Found!</option>';
	}

}

if (isset($_POST['m_id'])) {
    $id=$_POST['m_id'];
	$query = "SELECT * FROM school where m_id=$id";
	$result = $con->query($query);
	if ($result->num_rows > 0 ) {
			echo '<option value="">Select School</option>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<option value='.$row['id'].'>'.$row['s_name'].'</option>';
		 }
	}else{

		echo '<option>No School Found!</option>';
	}

}
?>
