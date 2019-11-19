<?php
// abook-muokkauslomake.php
include("navbar.php");

require_once ("/home/N0464/php-dbconfig/db-init.php");

$tunnus = isset($_GET['tunnus']) ? $_GET['tunnus'] : '';
	
$stmt = haeHenkilo($db, $tunnus);
teeMuokkauslomake($stmt);

// 
function haeHenkilo($db, $tunnus) {
   $sql = <<<SQLEND
   SELECT tunnus, sukunimi, etunimi, email, osoite, puhnro
   FROM henkilot WHERE tunnus = :tunnus
SQLEND;

   $stmt = $db->prepare($sql);
   $stmt->bindValue(':tunnus', "$tunnus", PDO::PARAM_STR);
   $stmt->execute();
   return $stmt;	
}

function teeMuokkauslomake($stmt) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

$forms = <<<EOForms
<p>Muokkaa / poista osoite</p>
<form method='post' action='abook-muokkaa.php'>
<table border='0' cellpadding='5'>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Tunnus</td>
  <td bgcolor='#dddddd'>{$row['tunnus']}<input type='hidden' name='tunnus' value='{$row['tunnus']}'></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Sukunimi</td>
  <td bgcolor='#dddddd'><input type='text' name='sukunimi' size='30' value='{$row['sukunimi']}'></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Etunimi</td>
  <td bgcolor='#dddddd'><input type='text' name='etunimi' size='30' value='{$row['etunimi']}'></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Osoite</td>
  <td bgcolor='#dddddd'><input type='text' name='osoite' size='30' value='{$row['osoite']}'></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Puhnro</td>
  <td bgcolor='#dddddd'><input type='text' name='puhnro' size='30' value='{$row['puhnro']}'></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Email</td>
  <td bgcolor='#dddddd'><input type='text' name='email' size='30' value='{$row['email']}'></td>
</tr>
</table>
<input type='submit' name='action' value='Tallenna muutokset' onclick="javascript: return confirm('Hyväksy muutokset?')">
</form>

<form method='post' action='abook-poista.php'>
<input type='hidden' name='tunnus' value='{$row['tunnus']}'>
<input type='submit' name='action' value='Poista' onclick="javascript: return confirm('Hyväksy poisto?')">
</form>
EOForms;
echo $forms;
}