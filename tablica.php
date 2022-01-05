<?php
require_once 'includes/dbh.inc.php';

$sql="SELECT * FROM log_tablica";
$stmt=mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_execute($stmt);
$rezultat=mysqli_stmt_get_result($stmt);
while($redak=mysqli_fetch_assoc($rezultat))
{
    echo "<tr><td> ". $redak["korisnickoime"] . "</td><td> " . $redak["datum"] . "</td><td> " . $redak["vrijeme"] . "</td><td> " . $redak["status_"] . "</td><tr> ";
}   
mysqli_stmt_close($stmt);

?>