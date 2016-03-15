<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<?php
class Controller
{
    private $model;

    public function __construct($model){
        $this->model = $model;
    }
    
    public function update(){
    	
    }

    public function clicked() {
        $this->model->string = 'Updated Data!';
    }
    
    public function change(){
    	return 'Call successful.';
    }
}