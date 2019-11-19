<?php
// h3t3-rosvo-main.php
session_start();
include('navbar.php');

// tähän tehdään kirjautumistarkastus
if (!isset($_SESSION['app1_islogged']) || $_SESSION['app1_islogged'] !== true) {
    header("Location: http://" . $_SERVER['HTTP_HOST']
                               . dirname($_SERVER['PHP_SELF']) . '/'
                               . "login.php");
    
    exit;
}

// Oletusarvot
$_SESSION['saldo'] = isset($_SESSION['saldo']) ? $_SESSION['saldo'] : 500;
$_SESSION['panos'] = isset($_SESSION['panos']) ? $_SESSION['panos'] : 100;

$peliteksti = "Et pelannut!";

if (isset($_SESSION['pelattu'])) {
    $peliteksti = <<<EOLomake
    Voittosi oli {$_SESSION['voittosumma']}
    <img src='kuva{$_SESSION['luku1']}.png'>
    <img src='kuva{$_SESSION['luku2']}.png'>
    <img src='kuva{$_SESSION['luku3']}.png'>
EOLomake;
}

$tyylit = <<<EOLtyylit
<style type="text/css">\n
img {width: 150px;}
</style>\n
EOLtyylit;

$html_page = <<<EOData

<br><a href='aseta-panos.php'>Aseta panos</a><br><a href='lisaa-rahaa.php'>Siirrä lisää rahaa pelitilille</a><br>
Saldosi on {$_SESSION['saldo']}<br>
Panoksesi on {$_SESSION['panos']}
<hr>

<form method='post' action='pelaa.php'>
<input type='submit' name='pelaa' value='pelaa'>
</form><br>
$peliteksti

EOData;

echo $tyylit;
echo $html_page;

$_SESSION['pelattu'] = NULL;