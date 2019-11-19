<title>Autolaskuri 2</title>
<h3 style=background-color:#fed;color:#000>Autolaskuri 2</h3>
<?php
// h3t2-autolaskuri.php
session_start();
// Pääohjelma
// Ternary operator, alustukset
$vw_lkm = isset($_SESSION['vw_lkm']) ? $_SESSION['vw_lkm'] : 0;
$opel_lkm = isset($_SESSION['opel_lkm']) ? $_SESSION['opel_lkm'] : 0;
$painike = isset($_POST['painike']) ? $_POST['painike'] : '';

laske_lkm($vw_lkm, $opel_lkm, $painike);
aseta_sessiot($vw_lkm, $opel_lkm);
tee_lomake();
nayta_tulokset($vw_lkm, $opel_lkm);

// Evästeiden mukana arvot ja kesto
function aseta_sessiot($vw_lkm, $opel_lkm) {
    $_SESSION['vw_lkm'] = $vw_lkm;
    $_SESSION['opel_lkm'] = $opel_lkm;
}

// Alustetaan tai päivitetään autojen lukumääriä:
// Muodolliset parametrit ovat viittauksia, joten
// muutetut arvot välittyvät "takaisin" kutsuvaan
// ohjelmalohkooon
function laske_lkm(&$vw_lkm, &$opel_lkm, $nappi) {
   // Jotakin autonappia painettu, lisätään kertymää
   if ($nappi == "VW") {
      $vw_lkm = $vw_lkm + 1;
   }
   elseif ($nappi == "Opel") {
      $opel_lkm = $opel_lkm + 1;
   }
   // Painettiin Nollaa-painiketta tai pyydetään sivua ekaa kertaa
   elseif ($nappi == "Nollaa"){
      $vw_lkm = 0;
      $opel_lkm = 0;
   }
}

function nayta_tulokset($vw_lkm, $opel_lkm) {
   echo "<pre>\n";
   echo "Volkswagenit ... : $vw_lkm kpl.\n";
   echo "Opelit ......... : $opel_lkm kpl.\n";
   echo "</pre>\n";
}

// Tehdään lomake
function tee_lomake() {
?>
   <form method="post" action="<?php echo $_SERVER{'PHP_SELF'}?>">
   <input type="submit" value="VW" name="painike">
   <input type="submit" value="Opel" name="painike">
   <input type="submit" value="Nollaa" name="painike">
   </form>
<?php
}

?>
