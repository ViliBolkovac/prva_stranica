var naziv;

function poruka1() {
    var text;
    text = "Hvala vam na sudjelovanju!";
    document.getElementById("tekst").innerHTML = text;
    naziv = document.getElementById("unos").value;
    document.getElementById("recenica").innerHTML = naziv;
}



