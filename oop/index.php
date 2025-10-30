<?php
require_once 'Animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

echo "<h2>output akhir</h2>";

$shaun = new Animal("shaun");
echo "Name : $shaun->name <br>";
echo "legs : $shaun->legs <br>";
echo "cold blooded : $shaun->cold_blooded <br><br>";

$kodok = new Frog("buduk");
echo "Name : $kodok->name <br>";
echo "legs : $kodok->legs <br>";
echo "cold blooded : $kodok->cold_blooded <br>";
$kodok->jump();

$sungokong = new Ape("kera sakti");
echo "Name : $sungokong->name <br>";
echo "legs : $sungokong->legs <br>";
echo "cold blooded : $sungokong->cold_blooded <br>";
$sungokong->yell();
?>
