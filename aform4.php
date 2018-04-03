<?php 

require_once ('config.php');

$mid = $_POST['mid'];
$pid = $_POST['pid'];

$sql = "DELETE FROM assignment WHERE project_id = '$pid' AND member_id = '$mid'";

$retval = mysqli_query($connection, $sql);

	if(! $retval)
	{
		die('Could not delete data: ' . mysqli_error());
	}            
            
echo "Deleted data successfully";
            
mysqli_close($connection);

?>