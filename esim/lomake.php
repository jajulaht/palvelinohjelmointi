<?php
// lomake.php
include("navbar.php");
 
require_once ("/home/N0464/php-dbconfig/db-init.php");
 
teeLomake();
 
function teeLomake() {
 
$forms = <<<EOForms
<h2>Jamk Jumppa / Kirjaa liikuntasuorituksesi</h2>
<form method='post' action='abook-lisaa.php'>
<table border='0' cellpadding='5'>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Nimi</td>
  <td bgcolor='#dddddd'><input type='text' name='nimi' size='30'></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Kuvaus</td>
  <td bgcolor='#dddddd'><input type='text' name='kuvaus' size='30'></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Pvm</td>
  <td bgcolor='#dddddd'><input type='date' name='pvm' size='30'></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Kesto</td>
  <td bgcolor='#dddddd'>30min<input type='hidden' name='kesto' size='30' value='30'></td>
</tr>
</table><br>
<input type='submit' name='action' value='Tallenna suoritus'>
</form>
EOForms;
echo $forms;
}