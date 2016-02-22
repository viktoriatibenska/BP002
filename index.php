<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/Joint.css" />
<script src="js/jquery.min.js"></script>
<script src="js/lodash.min.js"></script>
<script src="js/backbone-min.js"></script>
<script src="js/Joint.js"></script>
<script src="js/joint.shapes.uml.js"></script>

</head>
<body>
	<a href="js/statetest.html">State adding test</a>
	
	<h1>MVC test</h1>
	
	<?php

	ini_set('display_errors', 1);
	
	include 'model/Model.php';
	include 'view/View.php';
	include 'controller/Controller.php';
	
	
	$model = new Model();
	$controller = new Controller($model);
	$view = new View($controller, $model);

	$model = new Model();
	$controller = new Controller($model);
	$view = new View($controller, $model);
	
	
	echo $view->output();
	?>
	
	<!-- <div id="myholder"></div>
	<script src="js/StateChart.js"></script> -->
</body>
</html>