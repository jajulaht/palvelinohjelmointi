<?php
session_start();

if (isset($_SESSION['app1_islogged'])) {
    unset($_SESSION['app1_islogged']);
    // Tyhjätään $_SESSION-taulukko
   $_SESSION = array();
   // Poistetaan istuntoon liittyvä eväste
   if (isset($_COOKIE[session_name()])) {
      setcookie(session_name(), '', time()-86400, '/');
   }
   // Poistetaan itse istunto
   session_destroy();
}

header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "main.php");
?>