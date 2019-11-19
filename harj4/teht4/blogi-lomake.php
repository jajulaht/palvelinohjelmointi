<link rel="stylesheet" type="text/css" href="tyyli.css">
<!-- blogi-lomake -->

<title>Lisää blogimerkintä</title>
<div id='container'>
<?php include("config-navbar.php");?>
<h3>Lisää blogimerkintä</h3>

<div class="form-box">
<form action="blogi-tallenna.php" method="get">
   Otsikko:<br>
  <input type="text" name="otsikko"><br>
  Merkintä:<br>
  <textarea cols="30" rows="4" name="merkinta"></textarea><br>
  <input type="submit" name="nappi" value="Tallenna">
</form>
</div>
</div>