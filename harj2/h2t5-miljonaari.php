<?php
// h2t5-miljonaari.php

?>
<form>
<p>1. Valitse oikea vastaus.</p>
  <input type="radio" name="animal" value="1">
  <label>Hauki on kala</label><br>
  <input type="radio" name="animal" value="0">
  <label>Hauki on lintu</label><br>
  <input type="radio" name="animal" value="0">
  <label>Hauki on kissa</label>
<br>
<p>2. Mitä kirjainlyhenne PHP tarkoittaa puhuttaessa Web-ohjelmoinnista?</p>
<select name="php">
  <option value="-2">Peaceful Human Programming</option>
  <option value="2">PHP: Hypertext Preprocessor</option>
  <option value="-2">Professional Hypertext Parser</option>
</select>
<br> 
<p>3. Valitse oikeat vastaukset, jos niitä on.</p>
  <input type="checkbox" name="nro[]" value="3">
  <label for="nro">Mega on miljoona</label><br>
  <input type="checkbox" name="nro[]" value="-3">
  <label for="nro">Giga on miljoona</label><br>
  <input type="checkbox" name="nro[]" value="-3">
  <label for="nro">Haluan miljonääriksi</label><br>
  <br>
<p>4. Valitse oikeat vastaukset, jos niitä on.</p>
  <input type="checkbox" name="html[]" value="3">
  <label for="nro">HTML on hypertekstin merkintäkieli</label><br>
  <input type="checkbox" name="html[]" value="3">
  <label for="nro">HTML on standardoitu kieli</label><br>
  <input type="checkbox" name="html[]" value="-3">
  <label for="nro">HTML on säännöstä tyyliohjeille.</label><br>
  <br>
  <input type="submit" name="nappi" value="Tarkista vastaukset"><br>
</form>
<?php
// 1. vain yksi on oikea vastaus. Oikeasta vastauksesta saa pisteen, väärästä vastauksesta ei vähennetä pisteitä.
// 2. vain yksi on oikea. Oikeasta vastauksesta kaksi pistettä, väärästä vastauksesta vähennetään kaksi pistettä
// 3-4. oikeita voi olla 0-3kpl. Oikeasta vastauksesta lisätään 3 pistettä ja väärästä vähennetään 3 pistettä

if(isset($_GET['nappi'])) {
  laskePisteet();
}
function laskePisteet() {
  $pisteet = 0;
  $pisteet1 = 0;
  $pisteet2 = 0;
  $pisteet3 = 0;
  $pisteet4 = 0;
  // 1. tehtävä
  if(isset($_GET['animal'])) {
    $pisteet1 += $_GET['animal'];
  }
  else {
    $pisteet1 = 0;
  }
  // 2. tehtävä
  if(isset($_GET['php'])) {
    $pisteet2 += $_GET['php'];
  }
  // 3. tehtävä
  if(!empty($_GET['nro'])){
    foreach($_GET['nro'] as $selected) {
      $pisteet3 += $selected;
    }
  }
  else {
    $pisteet3 = 0;
  }
  // 4. tehtävä
  if(!empty($_GET['html'])){
    foreach($_GET['html'] as $selected) {
      $pisteet4 += $selected;
    }
  }
  else {
    $pisteet4 = 0;
  }
  $pisteet = $pisteet1 + $pisteet2 + $pisteet3 + $pisteet4;
  echo "Sait pisteitä yhteenä: " . $pisteet;
}
?>