<?php 

    $loz1=$_POST['reglozinka1'];
    $loz2=$_POST['reglozinka2'];
    $regkorisnickoime=$_POST['regkorisnickoime'];
    require_once 'dbh.inc.php';
    require_once 'funkcije.inc.php';
    if(isset($loz1)&&isset($loz2)&&isset($regkorisnickoime)&&$loz1==$loz2)
    {

        createUser($conn, $regkorisnickoime, $loz1);
    }

    else
    {
        header("location:../registracija.php?error=badSignUp");
    }

    


     
     