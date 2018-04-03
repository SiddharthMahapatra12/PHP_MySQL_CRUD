<?php

$connection = mysqli_connect('localhost', 'root', '$SAIiit1296433*');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}

$select_db = mysqli_select_db($connection, 'Task');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

?>