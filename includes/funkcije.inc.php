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