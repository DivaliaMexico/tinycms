<?php

/**
   * @product Divalia Tiny CMS
   * @name Divalia S.A de C.V
   *
   * @author Alberto Ferrer
   *
   * @version 0.1
   */
  include $_SERVER['DOCUMENT_ROOT'].'/library/smarty/Smarty.class.php';

  class TemplateEngine extends Smarty
  {
      public function __construct()
      {
          parent::__construct();
          $PATH = $_SERVER['DOCUMENT_ROOT'];
          $this->template_dir = $PATH.'/resources/templates/sources/';
          $this->config_dir = $PATH.'/resources/templates/config/';
          $this->compile_dir = $PATH.'/resources/templates/compiled/';
          $this->cache_dir = $PATH.'/resources/templates/cache/';
          $this->compile_check = true;
          $this->cache_modified_check = false;
          $this->debug = false;
          $this->debugging = false;
          $this->caching = false;
          /* Solo dejar habilitado en la rama devel de git */
          $this->clearCompiledTemplate();
      }
  }
