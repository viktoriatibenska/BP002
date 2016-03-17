<?php
include_once("model/Pattern.php");
include_once("model/State.php");
include_once("model/Connector.php");

class Model
{
    public function getPatternList() {
    	return array(
    			"1" => new Pattern(1, "Architect also implements", "Architect also implements","Architect also implements","Architect also implements","Architect also implements","Architect also implements"),
    			"2" => new Pattern(2, "Community of trust", "Community of trust","Community of trust","Community of trust","Community of trust","Community of trust"),
    			"3" => new Pattern(3, "Size the schedule", "Size the schedule", "Size the schedule", "Size the schedule", "Size the schedule", "Size the schedule")
    	);
    }
    
    public function getPattern($id) {
    	// we use the previous function to get all the states and then we return the requested one.
    	// in a real life scenario this will be done through a db select command
    	$allPatterns = $this->getPatternList();
    	return $allPatterns[$id];
    }
}
