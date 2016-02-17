<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">


<?php
class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output() {

    	$this->controller->clicked();
    	
    	return "<p>" . $this->model->string . "</p>";
    	
        //return "<p>" . $this->model->string . "</p>";

        //return '<p><a href="View.php?action=clicked"' . $this->model->string . "</a></p>";
    }
}