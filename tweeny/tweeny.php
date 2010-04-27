<?php
	
	session_start();
	
	require 'config.php';
	require 'tweenyDatabase.class.php';
	require 'tweenyView.php';
	
	if (ENVIR=='PROD') {
		error_reporting(0);
	} else {
		error_reporting(E_ALL);		
	}
	define ('APP',substr($_SERVER['SCRIPT_FILENAME'],0,-14).'tweeny');
	define ('siteroot',$_SERVER['REQUEST_URI']);

	$tweeny->database	= new tweenyDatabase($host,$username,$password,$database);
	
	
	
	/*****************************************
	*
	*  Parse URL
	*
	*****************************************/
	
	$temp_sitename = explode('/',$sitename);
	array_shift($temp_sitename);
	$temp_sitename = implode('/',$temp_sitename);

	$request = 		substr($_SERVER['REQUEST_URI'],
					strpos($_SERVER['REQUEST_URI'],$temp_sitename)+strlen($temp_sitename)+1) ;
	if (! $request) { $request = 'index'; }
	
	
	
	/*****************************************
	*
	*  Display views
	*
	*****************************************/
	
	bring('tweenyHeader');
	bring($request);
	bring('tweenyFooter');
	
	
	//echo $request;