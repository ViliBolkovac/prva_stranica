<?php

$dbServername="localhost";
$dbUsername="root";
$dbPassword="vili123";
$dbName="prvastranica";

$conn=mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Error:". mysqli_connect_error());
}

