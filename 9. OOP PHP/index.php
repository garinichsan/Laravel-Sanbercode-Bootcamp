<?php

require_once'Animal.php';
require_once'Frog.php';
require_once'Ape.php';

echo "<h3> Release 0 </h3>";
	$sheep = new Animal("shaun");

	echo "Animal's name : " . $sheep->get_name() . "<br>"; // "shaun"
	echo "Animal's legs : " . $sheep->get_legs() . "<br>"; // 2
	echo "cold blooded Animal : " . $sheep->get_cold_blooded() . "<br>"; // false


echo "<h3> Release 1 </h3>";
	$sungokong = new Ape("kera sakti");
	echo "Ape's name : " . $sungokong->get_name() . "<br>"; // "kera sakti"
	echo "Ape's legs : " . $sungokong->get_legs() . "<br>"; // 2
	echo "cold blooded Animal : " . $sungokong->get_cold_blooded() . "<br>"; // false
	echo "Ape's yell: ";
	$sungokong->yell(); // "Auooo"

	echo "<br>";

	$kodok = new Frog("buduk");
	echo "Frog's name : " . $kodok->get_name() . "<br>"; // "buduk"
	echo "Frog's legs : " . $kodok->get_legs() . "<br>"; // 4
	echo "cold blooded Animal : " . $kodok->get_cold_blooded() . "<br>"; // false
	echo "Frog's jump: ";
	$kodok->jump(); // "hop hop"

?>