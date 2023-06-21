<?php
	require_once("./Smarty/libs/Smarty.class.php");
	$smarty = new Smarty();
	$smarty->template_dir	= './templates/';
	$smarty->compile_dir	= './templates/templates_c/';
	$smarty->config_dir	= './templates/configs/';
	$smarty->cache_dir	= './templates/cache/';
?>