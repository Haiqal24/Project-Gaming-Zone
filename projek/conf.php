<?php
$dbhost="localhost";
$dbbuser="root";
$dbpass="";
$dbname="gz";

$conn=mysqli_connect($dbhost,$dbbuser,$dbpass,$dbname);

if(!$conn){
    die("Could not connect to database".mysqli_connect_error());
}
?>
