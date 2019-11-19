<?php
session_start();
require_once 'Autolaskuri.class.php';

$laskuri = new Autolaskuri();

if(isset($_GET['merkki'])) {
  $laskuri->tarkistaMaara($_GET['merkki']);
}

echo "<ul>";
echo "<li><a href='{$_SERVER['PHP_SELF']}?merkki=vw'>VW</a></li>";
echo "<li><a href='{$_SERVER['PHP_SELF']}?merkki=opel'>Opel</a></li>";
echo "<li><a href='{$_SERVER['PHP_SELF']}?merkki=toyota'>Toyota</a></li>";
echo "<li><a href='{$_SERVER['PHP_SELF']}?merkki=nollaa'>Nollaa</a></li>";
echo "</ul>";
?>
<table style="background: lightgray;">
  <tr>
    <td>
      <?php echo $laskuri; ?>
    </td>
  </tr>
</table>