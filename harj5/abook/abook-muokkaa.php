<?php
// abook-muokkaa.php
include("navbar.php");

require_once ("/home/N0464/php-dbconfig/db-init.php");

$tunnus   = isset($_REQUEST['tunnus'])   ? $_REQUEST['tunnus'] : '';
$sukunimi = isset($_REQUEST['sukunimi']) ? $_REQUEST['sukunimi'] : '';
$etunimi  = isset($_REQUEST['etunimi'])  ? $_REQUEST['etunimi'] : '';
$osoite   = isset($_REQUEST['osoite'])   ? $_REQUEST['osoite'] : '';
$puhnro   = isset($_REQUEST['puhnro'])   ? $_REQUEST['puhnro'] : '';
$email    = isset($_REQUEST['email'])    ? $_REQUEST['email'] : '';

$sql = <<<SQLEND
UPDATE henkilot
SET
sukunimi = :f2,
etunimi = :f3,
osoite = :f4,
puhnro = :f5,
email = :f6
WHERE tunnus = :f1
SQLEND;

$stmt = $db->prepare($sql);

$stmt->bindValue(':f1', $tunnus, PDO::PARAM_STR);
$stmt->bindValue(':f2', $sukunimi, PDO::PARAM_STR);
$stmt->bindValue(':f3', $etunimi, PDO::PARAM_STR);
$stmt->bindValue(':f4', $osoite, PDO::PARAM_STR);
$stmt->bindValue(':f5', $puhnro, PDO::PARAM_STR);
$stmt->bindValue(':f6', $email, PDO::PARAM_STR);

$stmt->execute();

$affected_rows = $stmt->rowCount();

echo "Muokattiin onnistuneesti $affected_rows riviä!<br>";