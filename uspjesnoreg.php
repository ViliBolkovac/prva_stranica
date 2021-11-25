
<?php include_once 'registracija.php'; ?>
<div class="prvi">
<?php 
    $a=$_POST['reglozinka1'];
    $b=$_POST['reglozinka2'];
    $regkorisnickoime=$_POST['regkorisnickoime'];
    if(isset($a)&&isset($b)&&!empty($a)&&!empty($b)&&!empty($regkorisnickoime)&&$a==$b)
    {
        echo 'Uspješno ste se registrirali';
        
    }
    else
    {
         echo 'Pokušajte ponovno';
    }
     ?>
     </div>
     