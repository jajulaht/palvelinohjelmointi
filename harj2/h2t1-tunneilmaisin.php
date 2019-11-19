<?php
// h2t1-tunneilmaisin.php

$on_vasy = "";
$on_pe = "";
$on_paapipi = "";

if(isset($_GET['vasy'])) {
    echo "<span class='iso'>Väsyttää ankarasti. </span>";
    $on_vasy = "checked";
}

if(isset($_GET['pe'])) {
    echo "<span class='iso'>On perjantai. </span>";
    $on_pe = "checked";
}

if(isset($_GET['paapipi'])) {
    echo "<span class='iso'>Pää on pipi. </span>";
    $on_paapipi = "checked";
}

$tyylit = <<<EOLtyylit
<style type="text/css">
.iso {color: blue; font-family: sans-serif; font-size: 2rem;}
</style>\n
EOLtyylit;

$lomake = <<<EOLomake
<form method="get"
    action="h2t1-tunneilmaisin.php">
    <p><strong>Mikä on?</strong></p>
    <input type="checkbox" name="vasy" $on_vasy>Väsy<br>
    <input type="checkbox" name="pe" $on_pe>Perjantai<br>
    <input type="checkbox" name="paapipi" $on_paapipi>Pää pipi<br><br>
    <input type="submit" value="Lähetä"><br>
</form>
EOLomake;

echo $tyylit;
echo $lomake;