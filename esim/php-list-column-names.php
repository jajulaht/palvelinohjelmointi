<?php
// how to list php column names

require_once ("/home/N0464/php-dbconfig/db-init.php");
$str = "DESCRIBE henkilot";
$stmt = $db->prepare($str);
$stmt->execute();
$kentat = $stmt->fetchAll(PDO::FETCH_COLUMN);
foreach ($kentat as $kentta) {
	echo $kentta . "<br>";
}
?>