<?php
session_start();
$korisnickoime=$_SESSION["korisnickoime"];
$status="izlogiran";

require_once 'dbh.inc.php';
require_once 'funkcije.inc.php';

datumivrijeme($conn, $korisnickoime, $status);


session_unset();
session_destroy();

header("location:../index.php");
exit();
