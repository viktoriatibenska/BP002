<?php

/**
 * @param id identification number
 * @param description string describing scenario of current state
 * @param summary is a short description of scenario
 * @param transitions array of transitions from current state
 * @param pattern object of parent pattern state belongs to
 * */
class State
{
	private $id;
	private $description;
	private $summary;
	private $transitions = array();
	private $pattern;
	
	public function __construct($id = NULL, $description = NULL, $summary = NULL, $pattern = NULL){
		$this->id = $id;
		$this->description = $description;
		$this->summary = $summary;
		$this->pattern = $pattern;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function getDescription(){
		return $this->description;
	}
	
	public function setDescription($string){
		$this->description = $string;
	}
	
	public function getSummary(){
		return $this->summary;
	}
	
	public function setSummary($string){
		$this->summary = $string;
	}
	
	public function getTransitions(){
		return $this->transitions;
	}
	
	public function setTransitions(array $transitions){
		$this->transitions = $transitions;
	}
	
	public function getPattern(){
		return $this->pattern;
	}
	
	public function setPattern(Pattern $pattern){
		$this->pattern = $pattern;
	}
}