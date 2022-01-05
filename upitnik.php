<?php include_once 'session_check.php' ?>
<?php include_once 'header.php'; ?>
    <h1>Upitnik</h1>

<div style="margin:30px;">

<p>Molim vas unesite ime:</p>

<input type="text" id="unos">
<button type="button" onclick="poruka1()">unesite</button>
<p id="tekst"></p>
<p id="recenica"></p>
</div>   

<div class="flex">
<div class="prvi">
<h1>Najbolja stranica</h1>
<form>
    <ul style="list-style-type: none;">
        <li><input type="radio"  name="naj_stranica">Glavna</li>
        <li><input type="radio"  name="naj_stranica">Sport</li>
        <li><input type="radio"  name="naj_stranica">Programiranje</li>
    </ul>
</form>

<form action="mailto:vilibolkovac@gmail.com" method="POST">
    <p>Email:</p>
    <input type="email">
    <p>Vaša poruka:</p>
    <textarea class="email"></textarea>
    <input type="submit" value="Submit">
</form>
</div>
</div> 


<?php include_once 'footer.php'; ?>