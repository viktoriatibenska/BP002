<?php

/**
 * @param id identification number
 * @param name name of the pattern
 * @param description string describing what pattern is about
 * @param states array of states contained by pattern
 * */
class Pattern
{
	private $id;
	private $name;
	private $description;
	private $states = array();

	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function setName($string){
		$this->name = $string;
	}
	
	public function getDescription(){
		return $this->description;
	}

	public function setDescription($string){
		$this->description = $string;
	}
	
	public function getStates(){
		return $this->states;
	}
	
	public function setStates(array $states){
		$this->states = $states;
	}
}