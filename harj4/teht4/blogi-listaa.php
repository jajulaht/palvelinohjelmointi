<link rel="stylesheet" type="text/css" href="tyyli.css">
<!-- blogi-listaa.php -->

<title>Blogi</title>
<div id='container'>
<?php include("config-navbar.php");?>
<h3>Blogi</h3>

<?php

$dir = dirname ($_SERVER['SCRIPT_FILENAME']) . "/data/";

foreach (glob("$dir*.txt") as $filename) {
    $filet[] = ("$filename"); // "$filename size " . filesize($filename) . "\n";
}

rsort($filet);

foreach ($filet as $filename) {
    include ("$filename");
    echo "<a href='blogi-merkinta.php?id=$filename'>Näytä merkintä</a>";
}

?>
</div>