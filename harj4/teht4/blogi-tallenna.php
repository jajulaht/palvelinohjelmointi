<link rel="stylesheet" type="text/css" href="tyyli.css">
<!-- blogi-tallenna.php -->

<title>Tallensit blogimerkinnän</title>
<div id='container'>
<?php include("config-navbar.php");?>
<h3>Tallensit blogimerkinnän</h3>

<?php

$aikaleima = date("Y-m-d--H-i-s");

define("BLOGI_FILE", "data/$aikaleima.txt");

// Lisätään viesti
if(isset($_GET['nappi'])) {

  if (!$fp = @fopen(BLOGI_FILE, "w"))
     {echo "fopen virhe!"; exit();}

  // Valmistellaan merkintä
  $_GET['merkinta'] = nl2br($_GET['merkinta']);

  $blogimerkinta = <<<BLOGIMERKINTA
  <div class='merkinta'>
  <h4>{$_GET['otsikko']}</h4>
  <p>{$_GET['merkinta']}</p>
  </div>
BLOGIMERKINTA;

  //Kirjoitetaan merkintä tiedostoon
  fwrite($fp, $blogimerkinta);
  fclose($fp);
}
echo $blogimerkinta;
?>
</div>