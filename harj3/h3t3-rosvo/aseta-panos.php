<?php
// aseta-panos.php

session_start();

if (isset($_GET['panos'])) {
    $_SESSION['panos'] = $_GET['panos'];
    // Uudelleenohjaus takaisin pääohjelmaan
    header("Location: http://" . $_SERVER['HTTP_HOST']
    . dirname($_SERVER['PHP_SELF']) . '/'
    . "h3t3-rosvo-main.php");
}

?>

<form action='aseta-panos.php' method='get'>
Aseta panos: <input type='text' name='panos'><br><br>
<input type='submit' name='nappi' value='Aseta panos'>
</form>