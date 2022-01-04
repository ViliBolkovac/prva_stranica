<!DOCTYPE html>
<html>
    <head>
<meta charset="utf-8">
<link rel="stylesheet" href="listastilova.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Stranica</title>
    </head>

    <body>
    <?php
session_start();
if(!isset($_SESSION["korisnickoime"]))
{
    header("location:../index.php");
}

?>
   <header>
        <nav>
            <div class="logo">VB</div>
            <ul>
                <li><a href="stranica.php">Glavna</a></li>
                <li><a href="programiranje.php">Programiranje</a></li>
                <li><a href="sport.php">Sport</a></li>
                <li><a href="upitnik.php">Upitnik</a></li>
                <li><a href="includes/logout.inc.php">Izlogirajte se</a></form></li>
            </ul>
        </nav>
    </header>