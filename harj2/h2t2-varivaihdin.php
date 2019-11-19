<?php
// h2t2-varivaihdin.php

$taustavarit["Valkoinen"] = "#ffffff";
$taustavarit["Keltainen"] = "#ffff00";
$taustavarit["Harmaa"] = "#c7c7c7";
$taustavarit["Sininen"] = "#297acc";

$varit["Musta"] = "#000000";
$varit["Punainen"] = "#d10000";
$varit["Vihreä"] = "#008a2c";
$varit["Sininen"] = "#015478";

$taustavari = "#ffffff"; 
$vari = "#000000";

if(isset($_GET['tvari'])) {
    $taustavari = $_GET['tvari'];
}

if(isset($_GET['vari'])) {
    $vari = $_GET['vari'];
}

$tyylit = <<<EOLtyylit
<style type="text/css">\n
body {background-color: $taustavari; color: $vari;}
table, td {border-collapse: collapse; border: 1px solid black;}
</style>\n
EOLtyylit;

$taustaoptiot = '';
foreach($taustavarit as $tvarinimi => $tvarikoodi) {
    $tvalittu = '';
    if($taustavari == $tvarikoodi) $tvalittu = "checked";
    $taustaoptiot .= "<input type='radio' name='tvari' value='$tvarikoodi' $tvalittu>$tvarinimi<br>";
}

$varioptiot = '';
foreach($varit as $varinimi => $varikoodi) {
    $valittu = '';
    if($vari == $varikoodi) $valittu = "checked";
    $varioptiot .= "<input type='radio' name='vari' value='$varikoodi' $valittu>$varinimi<br>";
}

$lomake = <<<EOLomake
<form method="get"
    action="h2t2-varivaihdin.php">
    <table>
    <tr>
    <td>Taustavärit:</td>
    <td>
    $taustaoptiot
    </td>
    </tr>
    <tr>
    <td>Tekstivärit:</td>
    <td>
    $varioptiot
    </td>
    </tr>
    </table>
    <input type="submit" value="Lähetä"><br>
</form>
EOLomake;

echo $tyylit;
echo $lomake;