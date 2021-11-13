
<?php include_once 'registracija.php'; ?>
<div class="prvi">
<?php 
    $a=$_POST['lozinka1'];
    $b=$_POST['lozinka2'];
    $korisnickoime=$_POST['korisnickoime'];
    if(isset($a)&&isset($b)&&!empty($a)&&!empty($b)&&!empty($korisnickoime)&&$a==$b)
    {
        echo 'Uspješno ste se registrirali';
        
    }
    else
    {
         echo 'Pokušajte ponovno';
    }
     ?>
     </div>
     