<?php
include_once("model/Model.php");

class Controller {

    private $model;
    private $postData;

    public function __construct($data = NULL) {
        $this->model = new Model();
        $this->postData = $data;
    }

    public function invoke() {

        if (!isset($_GET['pattern'])) {
            // no special book is requested, we'll show a list of all available books
            $patterns = $this->model->getPatternList();

            // Fulfil the view with the data acquired from model
            include 'view/patternList.php';
        } else {
            // show the requested book
            $pattern = $this->model->getPattern($_GET['pattern']);

            // Fulfil the view with the data acquired from model
            include 'view/viewPattern.php';
        }
    }
}