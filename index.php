<?php
	error_reporting(E_ALL);
	date_default_timezone_set("Europe/London");
	set_include_path("." . PATH_SEPARATOR . "./library"
				. PATH_SEPARATOR . "./application/models/"
				. PATH_SEPARATOR . get_include_path());
	include("Zend/Loader.php");
	Zend_Loader::loadClass("Zend_Controller_Front");
	Zend_Loader::loadClass("Zend_Config_Ini");
	Zend_Loader::loadClass("Zend_Registry");
	Zend_Loader::loadClass("Zend_Db");
	Zend_Loader::loadClass("Zend_Db_Table");
	
	// load config
	$config = new Zend_Config_Ini("./application/config.ini", "general");
	$registry = Zend_Registry::getInstance();
	$registry -> set("config", $config);
	
	// set database
	$db = Zend_Db::factory($config -> db -> adapter,
						$config -> db -> config);
	Zend_Db_Table::setDefaultAdapter($db);
	
	// setup controller
	$frontController = Zend_Controller_Front::getInstance();
	$frontController -> throwExceptions(true);
	$frontController -> setControllerDirectory("./application/controllers");
	
	// run!
	$frontController -> dispatch();
?>