<?php
	
	session_start();
	
	require 'config.php';
	require 'tweenyDatabase.class.php';
	
	if (ENVIR=='PROD') {
		error_reporting(0);
	} else {
		error_reporting(E_ALL);		
	}
	
	$tweeny->database	= new tweenyDatabase($host,$username,$password,$database);