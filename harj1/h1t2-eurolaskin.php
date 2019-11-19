<title>h1t2-eurolaskin.php</title>

<form method="get"
      action="<?php echo $_SERVER["PHP_SELF"]?>">
Eurot:<br><input type="text" name="eurot"><br>
<input type="submit" name="nappi" value="Lähetä">
</form>

<?php
if(!isset($_REQUEST['nappi'])) exit();
$markat = $_REQUEST['eurot'] * 5.94573;
echo "Terve, <strong>{$_REQUEST['eurot']}</strong> euroa on ";
echo "<strong>$markat</strong> markkaa";
?>