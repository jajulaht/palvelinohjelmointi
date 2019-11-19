<link rel="stylesheet" type="text/css" href="tyyli.css">
<!-- blogi-merknta.php -->

<title>Blogimerkintä</title>
<div id='container'>
<?php include("config-navbar.php");?>
<h3>Blogimerkintä</h3>

<?php

if(isset($_GET['id'])) {
    $file = $_GET['id'];
    include $file;
}
// unlink poistaminen --> blogi-poista.php
// reg expressions --> tiedoston nimi mahdollisesti
// echo "<a href='blogi-merkinta.php?id=$filename'>Näytä merkintä</a>";
echo "<a href='blogi-poista.php?id=$file'>Poista merkintä</a><br>";
?>
</div>