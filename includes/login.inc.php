<?php

$korisnickoime=$_POST['korisnickoime'];
$zaporka=$_POST['zaporka'];
require_once 'dbh.inc.php';
require_once 'funkcije.inc.php';

loginUser($conn, $korisnickoime, $zaporka);
