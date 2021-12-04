<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
<link rel="stylesheet" href="listastilova.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Stranica</title>

 </head>

 <body>
<div class="prvi">
    <div class="login">
    <form method="POST" action='includes/uspjesnoreg.inc.php'>
    <p>Korisničko ime:</p>
    <input type="text" name="regkorisnickoime">
    <p>Lozinka:</p>
    <input type="password" name="reglozinka1">
    <p>Ponovno unesite lozinku:</p>
    <input type="password" name="reglozinka2">
    <input type="submit" name="submit">

    </form>
    </div>
    <form  action='index.php' style="float: right;" >
    <input type="submit"  value="Ulogiraj se" ></input>
    </form>
 <div style="text-align: center;">
<?php
if(isset($_GET['error']))
{
    if($_GET['error']=='badSignUp')
       {
           echo 'pokušajte ponovno';
       }
}
?>
 </div>
</div>


 <?php include_once 'footer.php' ?>
    