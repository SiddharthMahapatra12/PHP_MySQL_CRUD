<?php 

require_once ('config.php');

$name = $_POST['name'];
            
$sql = "DELETE FROM project WHERE project_name = '$name'" ;
            
            $retval = mysqli_query($connection, $sql );
            
	if(! $retval )
	{
		die('Could not delete data: ' . mysqli_error());
    }
            
echo "Deleted data successfully";
            
mysqli_close($connection);

?>