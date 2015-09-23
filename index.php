<?php

/**
 * @product Divalia Tiny CMS
 * @name Divalia S.A de C.V
 *
 * @author Alberto Ferrer
 *
 * @version 0.1
 */
include $_SERVER['DOCUMENT_ROOT'].'/library/divalia/Init.php';
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
error_reporting(E_ALL);
ini_set('display_errors', true);

/* Sistema de ruteo o mas conocido como friendly url's */
$Path = $routes->Route();

/* El ultimo valor NULL es el index del sitio, dejarlo al ultimo siempre */
$allowed = array('blog',null);

/* Este breve chequeo verifica si un modulo esta permitido o no en $allowd y en el caso contrario mostrara una pagina de error. */
if (!in_array($Path[0], $allowed)) {
    header('HTTP/1.0 404 Not Found');
    $tpl->display('errors/404.tpl');
    die();
}

/* Agregamos aqui las secciones que nos hagan falta pero siempre dejamos default como inicio. */

switch ($Path[0]) {
    case 'blog':
    include $_SERVER['DOCUMENT_ROOT'].'/library/blog/markdown.php';
    include $_SERVER['DOCUMENT_ROOT'].'/library/blog/tinyengine.php';
    $tiny = new TinyEngine("storage");
    if(isset($Path[1]) && file_exists("storage/".urldecode(str_replace("-", " ", $Path[1])).".md")){
    $tpl->assign('entry', $tiny->fetchFileContents(urldecode(str_replace("-", " ", $Path[1])).".md"));
    $tpl->display('blog/read.tpl');
    } else {
    $tpl->assign('entries', $tiny->fetchFilenamesInDirectory());
    $tpl->display('blog/list.tpl');
    }
    break;
    default:
    $tpl->assign('title', 'Tiny CMS');
    $tpl->display('index.tpl');
    break;
}
