<
<script type="text/javascript">
//<!--

$(document).ready(function(){
	$(".123").click(function(){
		var ziskanyUdaj = $(this).val();
		$.ajax({
				method: "POST",
				url:	"Controller.php",
				data: 	ziskanyUdaj
			}).done(function(msg) {
					$("#informacny-pas").html(msg);
				});
	});
});

//-->
</script>

<form>
	<input type="submit" class="button" name="insert" value="insert" /> <input
		type="text" class="123" name="" value="" />
</form>

<div id="informacny-pas"></div>


<?php
class View {
	private $model;
	private $controller;
	public function __construct($controller, $model) {
		$this->controller = $controller;
		$this->model = $model;
	}
	public function output() {
		$this->controller->clicked ();
		
		return "<p>" . $this->model->string . "</p>";
		
		// return "<p>" . $this->model->string . "</p>";
		
		// return '<p><a href="View.php?action=clicked"' . $this->model->string . "</a></p>";
	}
}