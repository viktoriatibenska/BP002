<?php
include_once("model/Model.php");

class stateController {

	private $model;
	private $postData;

	public function __construct($data = NULL) {
		$this->model = new Model();
		$this->postData = $data;
	}

	public function update() {
		// Receive passed arguments from $_POST
		$args = func_get_args();

		// Write changes direct to model
		//        var_dump($args);                  // help for acquiring data
		//        var_dump($args[0]["element"]);    // help for acquiring data
		$pattern = $this->model->getPattern($args[0]["element"]);
		$pattern->getDescription();

		echo "Changed attribute DESCRIPTION from = ".$state->getDescription()." to = ".$args[0]["value"];
		return TRUE;
	}

}