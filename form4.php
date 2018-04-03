<?php 

require_once ('config.php');

$name = $_POST['name'];
            
$sql = "DELETE FROM member WHERE name = '$name'" ;
            
$retval = mysqli_query( $connection, $sql );
            
	if(! $retval )
	{
		die('Could not delete data: ' . mysql_error());
    }
            
echo "Deleted data successfully\n";
            
mysql_close($connection);

?>