<?php
	require_once 'smarty/Smarty.class.php';

	$smarty = new Smarty();
	$smarty->template_dir = 'templates/';
	$smarty->compile_dir = 'templates_c/';
	
	$smarty->display("member_create_form.html");
?>