<?php

/**
 * @param id identification number
 * @param scenario string describing scenario of current state
 * @param transitions array of transitions from current state
 * @param pattern object of parent pattern state belongs to
 * */
class State
{
	private $id;
	private $scenario;
	private $transitions = array();
	private $pattern;
	//private $srcTransition;
	
	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function getScenario(){
		return $this->scenario;
	}
	
	public function setScenario($string){
		$this->scenario = $string;
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
	
	/*public function getSrcTransition(){
		return $this->srcTransition;
	}
	
	public function setSrcTransition(Transition $transition){
		$this->srcTransition = $transition;
	}*/
}