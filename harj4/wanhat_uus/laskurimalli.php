<title>Autolaskuri</title>
<h3 style=background-color:#fed;color:#000>Autolaskuri</h3>
<?php
// h4t3-autolaskuri-oop.php
require_once 'h4t3-Autolaskuri.class.php';

session_start();

echo "<pre>";

echo "<a href='{$_SERVER['PHP_SELF']}?nappi=VW'>" .
    "VW</a>\n";

echo "<a href='{$_SERVER['PHP_SELF']}?nappi=Opel'>" .
    "Opel</a>\n";

echo "<a href='{$_SERVER['PHP_SELF']}?nappi=Toyota'>" .
    "Toyota</a>\n";

echo "<a href='{$_SERVER['PHP_SELF']}?nappi=Nollaa'>" .
    "Nollaa</a>\n";

echo "</pre>";

$auto = new Autolaskuri();
$auto->tarkistaMaara();

if (isset($_REQUEST['nappi'])) {
    $auto->tarkistaMaara();
}

$VW = $_SESSION['VW_lkm'] ;
$opel = $_SESSION['opel_lkm'] ;
$toyota = $_SESSION['toyota_lkm'] ;

echo "Volkswagenit ... : " . $VW . " kpl<br>\n";
echo "Opelit ............... : " . $opel . " kpl<br>\n";
echo "Toyotat ............. : " . $toyota . " kpl";

?>