<?php
/**
 * génére une vue avec plates
 * docs de plates : http://platesphp.com/
 */
function view($path, $vars = null){
	$tpl = new League\Plates\Engine(__DIR__.'/views');
	return $tpl->render($path, $vars);
}


/**
 * affiche un message stocké dans la session pour une future requete
 */
function flash() {
	$msg = '';
	if(isset($_SESSION['msg'])) {
		$msg = $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	return $msg;
}