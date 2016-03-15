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
	private $context;
	private $problems;
	private $consequences;
	private $solution;
	private $states = array();
	
	public function __construct($id = NULL, $name = NULL, $description = NULL, $context = NULL, $problems = NULL, $consequences = NULL, $solution = NULL){
		$this->id = $id;
		$this->name = $name;
		$this->description = $description;
		$this->context = $context;
		$this->problems = $problems;
		$this->consequences = $consequences;
		$this->solution = $solution;
	}
	
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
	
	public function getContext(){
		return $this->context;
	}
	
	public function setContext($string){
		$this->context = $string;
	}
	
	public function getProblems(){
		return $this->problems;
	}
	
	public function setProblems($string){
		$this->problems = $string;
	}
	
	public function getConsequences(){
		return $this->consequences;
	}
	
	public function setConsequences($string){
		$this->consequences = $string;
	}
	
	public function getSolution(){
		return $this->solution;
	}
	
	public function setSolution($string){
		$this->solution = $string;
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