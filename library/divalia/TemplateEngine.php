<?php
/**
 * @product Divalia Tiny CMS
 * @name Divalia S.A de C.V
 * @author Alberto Ferrer
 * @version 0.1
 * @package Smarty Template Engine Module
 */


include $_SERVER['DOCUMENT_ROOT']."/library/smarty/Smarty.class.php";

$_CONFIG['doc_base'] 				      = $_SERVER['DOCUMENT_ROOT'];
$_CONFIG['uri_base'] 				      = '/';
$_SMARTY_CONFIG['templates_dir'] 	= $_CONFIG['doc_base'] . '/resources/templates/sources/';
$_SMARTY_CONFIG['conf_dir'] 		  = $_CONFIG['doc_base'] . '/resources/templates/config/';
$_SMARTY_CONFIG['cache_dir'] 		  = $_CONFIG['doc_base'] . '/resources/templates/cache/';
$_SMARTY_CONFIG['compile_dir'] 		= $_CONFIG['doc_base'] . '/resources/templates/compiled/';
$_SMARTY_CONFIG['use_cache']    	= false;


class TemplateEngine extends Smarty {

function __construct()
{
    parent::__construct();
		global $_SMARTY_CONFIG;
		$this->template_dir			       = $_SMARTY_CONFIG['templates_dir'];
		$this->config_dir			         = $_SMARTY_CONFIG['conf_dir'];
		$this->compile_dir			       = $_SMARTY_CONFIG['compile_dir'] ;
		$this->cache_dir			         = $_SMARTY_CONFIG['cache_dir'];
		$this->compile_check 		       = true;
		$this->cache_modified_check    = true;
    $this->debugging 			         = false;
		$this->caching 				         = (isset($caching) ? $caching : $_SMARTY_CONFIG['use_cache']);
	}
}
