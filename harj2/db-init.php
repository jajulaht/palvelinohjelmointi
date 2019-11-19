<?php
// db-init.php
$db = new PDO('mysql:host=mysql.labranet.jamk.fi;dbname=N0464;charset=utf8',
              'N0464', 'JbOjmEt3L3ZOa27Dr3Gbq2Cw99wWjznm');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>