<?php
// h2t3-linkkilista.php

$urh = <<<EOLUrh
<p>Päivää urheilun ystävä, tässäpä muutama linkki
<ul>
    <li><a href="https://www.mtvuutiset.fi/aihe/urheilu/2963748">MTV Sport</a></li>
    <li><a href="https://yle.fi/urheilu">yle.fi/urheilu</a></li>
</ul></p>
EOLUrh;

$mus = <<<EOLMusa
<p>Päivää musiikin ystävä, tässäpä muutama linkki
<ul>
    <li><a href="https://www.soundi.fi/">Soundi</a></li>
    <li><a href="https://www.spotify.com/fi/">Spotify</a></li>
</ul></p>
EOLMusa;

$kir = <<<EOLKir
<p>Päivää kirkkojen ystävä, tässäpä muutama linkki
<ul>
    <li><a href="http://www.churches.fi/">Kirkot Suomessa</a></li>
    <li><a href="https://evl.fi/etusivu">Suomen evlut. kirkko</a></li>
</ul></p>
EOLKir;

$lomake = <<<EOLomake
<form method="get"
    action="h2t3-linkkilista.php">
    <select name="linkit[]" size="3" multiple> 
    <option value="urh">Urheilu</option>
    <option value="mus">Musiikki</option>
    <option value="kir">Kirkot</option>
    </select>
    <br><br>
    <input type="submit" value="Tulosta linkit"><br>
</form>
EOLomake;

echo $lomake;

// Tarkistetaan, että jokin linkki on valittu
if (!isset($_GET['linkit'])) {
  echo "Voit valita aihealueet ylläolevasta valikosta.";
  exit();
}

foreach ($_GET['linkit'] as $arvo)
{
  if($arvo == "urh") {
    echo $urh;
  }
  elseif($arvo == "mus") {
    echo $mus;
  }
  else {
    echo $kir;
  }
}