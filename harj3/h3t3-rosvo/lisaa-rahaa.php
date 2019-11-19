<?php
// lisaa-rahaa.php

session_start();

if (isset($_GET['summa'])) {
    $_SESSION['saldo'] += $_GET['summa'];
    // Uudelleenohjaus takaisin pääohjelmaan
    header("Location: http://" . $_SERVER['HTTP_HOST']
    . dirname($_SERVER['PHP_SELF']) . '/'
    . "h3t3-rosvo-main.php");
}

?>

<form action='lisaa-rahaa.php' method='get'>
Kirjoita rahasumma: <input type='text' name='summa'><br><br>
<input type='submit' name='nappi' value='Lisää summa'>
</form>