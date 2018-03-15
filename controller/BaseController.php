<?php
require_once(__DIR__."/../core/ViewManager.php");
require_once(__DIR__."/../model/ClienteMapper.php");
require_once(__DIR__."/../model/Cliente.php");
class BaseController {
    protected $view;	
   public function __construct() {                
        $this->view = ViewManager::getInstance();  
        if (session_status() == PHP_SESSION_NONE) {      
    	     session_start();
        }		   
   }     
}