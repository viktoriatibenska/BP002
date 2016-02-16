<?php
class State
{
	private $scenario;
	
	public function getScenario(){
		return $this->scenario;
	}
	
	public function setScenario($string){
		$this->scenario = $string;
	}
}