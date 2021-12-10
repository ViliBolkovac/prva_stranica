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
  $sql="SELECT * FROM korisnici WHERE korisnickoime = ?";
  $stmt= mysqli_stmt_init($conn);
  mysqli_stmt_prepare($stmt, $sql);

  mysqli_stmt_bind_param($stmt,"s", $korisnickoime);
  mysqli_stmt_execute($stmt);

$rezultat=mysqli_stmt_get_result($stmt);

if($redak=mysqli_fetch_assoc($rezultat))
{
    return $redak;
}
else
{
    $nemakorisnika=false;
    return $nemakorisnika;
}

  mysqli_stmt_close($stmt);
}

function loginUser($conn, $korisnickoime, $zaporka)
{
   $korisnikpostoji=korisnikpostoji($conn, $korisnickoime);
   if($korisnikpostoji ===false)
   {
       header("location:../index.php?error=userNonexistant");
       exit();
   } 

   $hashedloz=$korisnikpostoji["zaporka"];
   $provjerizaporku=password_verify($zaporka, $hashedloz);
   if($provjerizaporku===false)
   {
       header("location:../index.php?error=badLogIn");
       exit();
   }
   else if($provjerizaporku===true)
   {
       session_start();
       $_SESSION["id"]=$korisnikpostoji["id"];
       $_SESSION["korisnickoime"]=$korisnikpostoji["korisnickoime"];
       $status="ulogiran";
       

       datumivrijeme($conn, $korisnickoime, $status);
       header("location:../stranica.php");
       exit();
   }

}


function datumivrijeme($conn, $korisnickoime, $status)
{
    $sql="INSERT INTO log_tablica (korisnickoime, datum, vrijeme, status_) VALUES (?, ?, ?, ?)";
    $stmt=mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    $datum=date("d/m/Y");
    $vrijeme=date("h:i:sa");
    mysqli_stmt_bind_param($stmt, "ssss", $korisnickoime, $datum, $vrijeme, $status);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}