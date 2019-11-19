<?php


$luku1 = rand(1,3);
$luku2 = rand(1,3);
$luku3 = rand(1,3);

echo "<img src=\"kuva$luku1.jpg\">";
echo "<img src='kuva$luku2.jpg'>";
echo "<img src='kuva" . $luku3 . ".jpg'>";

