<?php

function createUser($conn, $regkorisnickoime, $loz1)
{
    $sql="INSERT INTO korisnici (korisnickoime, zaporka) VALUES (?, ?)";
    $stmt=mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);

    $hashedloz=password_hash($loz1, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ss", $regkorisnickoime, $hashedloz );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location:../registracija.php");
    exit();

}

function korisnikpostoji($conn, $korisnickoime)
{
  $sql="SELECT * FROM korisnici WHERE korisnickoime = ? ";
  $stmt= mysqli_stmt_init($conn);


  mysqli_stmt_bind_param($stmt,"s", $korisnickoime);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

}

function loginUser($conn, $korisnickoime, $zaporka)
{
   $korisnikpostoji=korisnikpostoji($conn, $korisnickoime);
   if($korisnikpostoji == false)
   {
       header("location:../index.php?error=badLoginIn");
       exit();
   } 

   $hashedlogloz=$korisnikpostoji['zaporka'];
   $provjerizaporku=password_verify($hashedlogloz, $zaporka);
   if($provjerizaporku == false)
   {
       header("location:../index.php?error=badLogIn");
       exit();
   }
   else if($provjerizaporku == true)
   {
       header("location:../stranica.php");
       exit();
   }
}
