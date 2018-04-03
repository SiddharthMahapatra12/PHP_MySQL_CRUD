<?php 

require_once ('config.php');

$name = $_POST['name'];

$Sql = "SELECT * FROM member WHERE name = '$name'";

$retval = mysqli_query($connection, $Sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }

if (mysqli_num_rows($retval) > 0) {
    while($row = mysqli_fetch_assoc($retval)) {
        echo " Name : " . $row["name"]."<br>"." Email : " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

echo "<br>"."<br>"."Fetched data successfully";
   
mysqli_free_result($retval);
   
mysqli_close($connection);

?>
