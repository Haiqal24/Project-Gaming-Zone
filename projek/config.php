<?php
$dbhost="localhost";
$dbbuser="root";
$dbpass="";
$dbname="beli";

$conn=mysqli_connect($dbhost,$dbbuser,$dbpass,$dbname);

if(!$conn){
    die("Could not connect to database".mysqli_connect_error());
}
?>
