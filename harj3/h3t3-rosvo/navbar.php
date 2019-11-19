<?php

// Kirjautumattomat pääsevät kirjautumaan
if (!isset($_SESSION['app1_islogged']) || $_SESSION['app1_islogged'] !== true) {
   echo "[Et ole kirjautunut!] ";
   echo "[ <a href='login.php'>Kirjaudu</a> ]";
} else { // ja kirjautuneet uloskirjautumaan
   echo "[Olet kirjautunut tunnuksella: <span style='background: yellow;'>{$_SESSION['uid']}</span> ] ";
   echo "[<a href='logout.php'>Kirjaudu ulos</a>]";
}
?>