<?php
// pelaa.php
session_start();

// Tähän tulee kirjautumistarkastus

$_SESSION['saldo'] = $_SESSION['saldo'] - $_SESSION['panos'];
$_SESSION['voittosumma'] = 0;

// Arvotaan kuvat (tai tarkemmin luvut niille)
$_SESSION['luku1'] = rand(1,4);
$_SESSION['luku2'] = rand(1,4);
$_SESSION['luku3'] = rand(1,4);

if($_SESSION['luku1'] == $_SESSION['luku2'] AND $_SESSION['luku2'] == $_SESSION['luku3']) {
    $_SESSION['voittosumma'] = 700;
}

$_SESSION['saldo'] = $_SESSION['saldo'] + $_SESSION['voittosumma'];

$_SESSION['pelattu'] = TRUE;

// Uudelleenohjaus takaisin pääohjelmaan
header("Location: http://" . $_SERVER['HTTP_HOST']
. dirname($_SERVER['PHP_SELF']) . '/'
. "h3t3-rosvo-main.php");