<?php

require_once 'Animal.php';

class Ape extends Animal{

	public function __construct($name){ 
		parent::__construct($name);
	}

	public function yell(){ echo "Auooo <br>"; }
}


?>