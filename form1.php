<?php 

require_once ('config.php');

		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];


$CreateSql = "INSERT INTO member (id, name, email) VALUES ('$id', '$name', '$email')";

$res = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));

	if($res)
	{
		$smsg = "Successfully inserted data, Insert New data.";
		echo $smsg;
	}
	else
	{
		$fmsg = "Data not inserted, please try again later.";
		echo $fmsg;
	}

?>