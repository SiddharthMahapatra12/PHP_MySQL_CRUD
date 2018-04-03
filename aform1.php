<?php 

require_once ('config.php');

$id = $_POST['id'];
$mid = $_POST['mid'];
$pid = $_POST['pid'];

$sql = "INSERT INTO assignment (id, project_id, member_id) VALUES ('$id','$pid','$mid')";

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