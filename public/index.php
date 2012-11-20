#!/usr/local/zend/bin/php
<?php

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/library'),
    get_include_path(),
)));

/** Zend_Application */
require_once 'Zend/Application.php';

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);

try {
	$opts = new Zend_Console_Getopt(array(
				'help|h' => 'Display usage inforation.',
				'action|a=s' =>	'action to perform in format of "module.controller.action.param1.param2.param3..."',
				'env|e=s' => 'defines application environment (defaults to "production")'
			));
	
	$opts->setOptions(array(
				'ignoreCase' => true,
				'dashDash' => false
		));
	
	if (isset($opts->help)) {
		echo $opts->getUsageMessage();
		return true;
	}
	
	if (isset($opts->action)){
		$front = $application->getBootstrap()
							->bootstrap('frontController')
							->getResource('frontController');
		
		@list($action, $controller, $module) = array_reverse(explode('.', $opts->action));
		
		$request = new Zend_Controller_Request_Simple($action, $controller, $module);
		
		$front->setRequest($request)
				->setResponse(new Zend_Controller_Response_Cli())
				->setRouter(new Cli_Router())
				->throwExceptions(true);
		
		$application->bootstrap()->run();
	}
	
	
} catch (Zend_Console_Getopt_Exception $execption) {
	echo $execption->getUsageMessage();
	exit;
}

