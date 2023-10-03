<?php

class House{
	private $address;
	private $hn;
	
	public function __construct($address,$hn){
		$this->address=$address;
		$this->hn=$hn;
	}
	
	public function getAddress(){
		echo $this->address;
	}
	
}

?>