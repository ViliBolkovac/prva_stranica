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
    <form method="POST" action='stranica.php'>
    <p>Korisničko ime:</p>
    <input type="text" name="korisnickoime">
    <p>Lozinka:</p>
    <input type="password" name="lozinka">
    <input type="submit">
    </form>
    </div>
    <form  action='registracija.php' style="float: right;">
    <input type="submit"  value="Registriraj se" ></input>
    </form>
</div>



 <?php include_once 'footer.php' ?>
    