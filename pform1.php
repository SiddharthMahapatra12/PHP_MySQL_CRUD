<?php 

require_once ('config.php');

		$pid = $_POST['pid'];
		$name = ($_POST['name']);
		$description = ($_POST['description']);
		$domain = ($_POST['domain']);

$sql = "INSERT INTO project (id, project_name, description, domain) VALUES ('$pid','$name', '$description', '$domain')";

$res = mysqli_query($connection, $sql) or die(mysqli_error($connection));

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