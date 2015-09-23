<?php

/**
 * @product Divalia Tiny CMS
 * @name Divalia S.A de C.V
 *
 * @author Alberto Ferrer
 *
 * @version 0.1
 */
header('Content-Type: text/html; charset=utf-8');
include $_SERVER['DOCUMENT_ROOT'].'/library/divalia/TemplateEngine.php';
include $_SERVER['DOCUMENT_ROOT'].'/library/divalia/RoutingEngine.php';

/* Inicio el sistema de templates */
$tpl = new TemplateEngine();

/* Inicio el sistema de ruteos y urls bonitas */
$routes = new RoutingEngine();
