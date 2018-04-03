<?php 

require_once ('config.php');

$name = $_POST['name'];

$sql = "SELECT * FROM project WHERE project_name = '$name'";

$retval = mysqli_query($connection, $sql );
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }
   
 if (mysqli_num_rows($retval) > 0) {
    while($row = mysqli_fetch_assoc($retval)) {
        echo " Project Name : " . $row["project_name"] . "<br>" . " Description : " . $row["description"] . "<br>" . "Domain :" . $row["domain"] . "<br>"; 
    } 
} else {
    echo "0 results";
}
   
   echo "<br>"."<br>"."Fetched data successfully";

   mysqli_free_result($retval);
   
   mysqli_close($connection);

?>