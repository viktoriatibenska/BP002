<!-- <!DOCTYPE html>
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
	-->
	<?php
	
		// If something was posted through AJAX
		if ($_POST != NULL) {
		
		    // Compose a class name and method name
		    // from posted data
		    $classname = $_POST["action"] . 'Controller';
		    $methodname = $_POST["method"];
		
		    // Before creating a new controller we need to include it
		    include_once("controller/" . $classname . ".php");
		
		    // Create new controller
		    $controller = new $classname();
		
		    // Pass data as arguments 
		    $controller->$methodname($_POST["arguments"]);
		    
		} else {    // If not, just continue to regular page and retreive values from $_GET
		    include_once("controller/Controller.php");
		
		    $controller = new Controller($_POST);
		    $controller->invoke();
		}
	?>
	<!-- <div id="myholder"></div>
	<script src="js/StateChart.js"></script> 
</body>
</html> -->