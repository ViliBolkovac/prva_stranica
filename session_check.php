
<?php

session_start();

 $user_check=(isset($_SESSION['korisnickoime']) && !empty($_SESSION['korisnickoime']))?$_SESSION['korisnickoime']:'';



if(empty($user_check))
{
   header("Location: index.php");
}

?>




