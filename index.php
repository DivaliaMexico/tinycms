<?php
/**
 * @product Divalia Tiny CMS
 * @name Divalia S.A de C.V
 * @author Alberto Ferrer
 * @version 0.1
 * @package Pagina de inicio con definiciones & secciones.
 */
include $_SERVER['DOCUMENT_ROOT']."/library/divalia/Init.php";

error_reporting(E_ALL);
ini_set('display_errors', true);

/* Sistema de ruteo o mas conocido como friendly url's */
$Path = $routes->Route();

/* El ultimo valor NULL es el index del sitio, dejarlo al ultimo siempre */
$allowed = array(NULL);

/* Este breve chequeo verifica si un modulo esta permitido o no en $allowd y en el caso contrario mostrara una pagina de error. */
if(!in_array($Path[0], $allowed)){
	header("HTTP/1.0 404 Not Found");
	$tpl->display('errors/404.tpl');
	die();
}

/* Agregamos aqui las secciones que nos hagan falta pero siempre dejamos default como inicio. */

switch($Path[0]){
      default:
				$tpl->assign('title', 'Dealers Will Hear Car Talk at Noon.');
        $tpl->display('index.tpl');
      break;
}
