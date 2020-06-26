<?php

require_once 'Animal.php';

class Frog extends Animal{

	public function __construct($name){ 
		parent::__construct($name);
		parent::set_legs(4);
		parent::set_cold_blooded('true');
	}

	public function jump(){ echo "hop hop <br>"; }
}


?>