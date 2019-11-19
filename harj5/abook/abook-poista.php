<?php
// abook-poista.php
include("navbar.php");

require_once ("/home/N0464/php-dbconfig/db-init.php");

$tunnus   = isset($_REQUEST['tunnus'])   ? $_REQUEST['tunnus'] : '';

$sql = <<<SQLEND
DELETE FROM henkilot 
WHERE tunnus LIKE :f1
SQLEND;

$stmt = $db->prepare($sql);

$stmt->bindValue(':f1', $tunnus, PDO::PARAM_STR);

$stmt->execute();

$affected_rows = $stmt->rowCount();

echo "Muokattiin onnistuneesti $affected_rows riviä!<br>";