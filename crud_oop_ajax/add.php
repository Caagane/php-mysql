<?php
	include('conn.php');
	if(isset($_POST['firstname'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];

		$conn->query("insert into member (firstname, lastname) values ('$firstname', '$lastname')");
	}

?>