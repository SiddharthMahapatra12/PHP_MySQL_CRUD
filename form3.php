<?php 

require_once ('config.php');

$name = $_POST['name'];
$email = $_POST['email'];
            
   $sql = "UPDATE member SET email = '$email' WHERE name = '$name'" ;

   $retval = mysqli_query( $connection, $sql );
            
   if(! $retval )
   {
      die('Could not update data: ' . mysql_error());
   }
   echo "Updated data successfully";
            
mysql_close($connection);

?>