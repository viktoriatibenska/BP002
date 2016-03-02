<?php

/**
 * @param id identification number
 * @param description string describing an option which activates transition
 * @param summary is a short description of transition 
 * @param dstState state to which transition points
 * @param srcState state from which transition started
 * */
class Connector
{
	private $id;
	private $description;
	private $summary;
	private $dstState;
	private $srcState;

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
	
	public function getDstState(){
		return $this->dstState;
	}
	
	public function setDstState(State $state){
		$this->dstState = $string;
	}
	
	public function getSrcState(){
		return $this->srcState;
	}
	
	public function setSrcState(State $state){
		$this->srcState = $string;
	}
}