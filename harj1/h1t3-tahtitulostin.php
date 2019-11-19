<title>h1t3-tahtitulostin.php</title>

<form method="get"
      action="<?php echo $_SERVER["PHP_SELF"]?>">
Anna tähtien lukumäärä:<br><input type="text" name="tahtilkm"><br>
<input type="submit" name="nappi" value="Tulosta tähtiä">
</form>

<?php
if(!isset($_REQUEST['nappi'])) exit();

tahtitulostin($_REQUEST['tahtilkm']);

function tahtitulostin($maara) {
    echo "Terve, tulostat <strong>$maara</strong> tähteä";
    for ($i = 0; $i < $maara; $i++) {
        echo "<br>*";
    }
}
?>