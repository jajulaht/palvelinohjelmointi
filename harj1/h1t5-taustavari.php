<title>h1t5-taustavari.php</title>
<?php
echo "<table border='1'\n";
for($i = 0; $i < 7; $i++) {
    $tvari = taustavari();
    echo "<tr bgcolor='$tvari'><td>Rivi $i</td></tr>\n";
}
echo "</table>\n";

function taustavari() {
    static $tvari = "#ffffff";
    if($tvari == "#ffffff") {
        $tvari = "#ffff00";
    } else {
        $tvari = "#ffffff";
    }
    return $tvari;
}
?>