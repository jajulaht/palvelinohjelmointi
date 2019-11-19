<link rel="stylesheet" type="text/css" href="tyyli.css">
<!-- blogi-poista.php -->

<title>Blogimerkintä</title>
<div id='container'>
<?php include("config-navbar.php");?>
<h3>Blogimerkinnän poistaminen</h3>

<?php

if(isset($_GET['id'])) {
    $filename = $_GET['id'];
}
// tiedoston nimi polusta
$file = explode("/", $filename);
$last = count($file) - 1;
$name = $file[$last];
echo "Merkintä " . $name . " poistettu.";

unlink($filename);

?>