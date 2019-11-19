<?php
// h2t4-hullu-nappi.php
if (!isset($_GET['count'])) {
  $msg = "";
  $ct = 1;
}
elseif ($_GET['count'] == 1) {
  $msg = "Yksi kerta riittää!";
  $ct = 2;
}
elseif ($_GET['count'] == 2) {
  $msg = "Kaksi kertaa riittää!";
  $ct = 3;
}
elseif ($_GET['count'] == 3) {
  $msg = "Kolme kertaa riittää!";
  $ct = 4;
}
else {
  $msg = "";
  $ct = 1;
}
?>
<form method="GET" action="<?php echo $_SERVER{'PHP_SELF'}?>">
<input type="submit" value="Paina nappia" name="nappula">
<input type="hidden" value="<?php echo "$ct"?>" name="count"> 

<input type="text" value="<?php echo "$msg"?>" name="msg">
</form>
