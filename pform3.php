<?php 

require_once ('config.php');

$name = $_POST['name'];
$description = $_POST['description'];
$domain = $_POST['domain'];
            
   $sql = "UPDATE project SET description = '$description', domain = '$domain' WHERE project_name = '$name'" ;

   $retval = mysqli_query($connection, $sql );
            
   if(! $retval )
   {
      die('Could not update data: ' . mysqli_error());
   }
   echo "Updated data successfully";
            
mysqli_close($connection);

?>