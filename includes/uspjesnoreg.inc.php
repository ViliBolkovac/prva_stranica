<?php 

    $loz1=$_POST['reglozinka1'];
    $loz2=$_POST['reglozinka2'];
    $regkorisnickoime=$_POST['regkorisnickoime'];
    require_once 'dbh.inc.php';
    require_once 'funkcije.inc.php';

        createUser($conn, $regkorisnickoime, $loz1);
       

    


     
     