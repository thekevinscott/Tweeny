<?php
	/*****************************************
	*
	*  Site info
	*
	*****************************************/

	define('ENVIR','DEV');

	if (ENVIR=='DEV') {
		$sitename = 'localhost/tweeny/html';
	} else {
		$sitename = 'tweeny.com';
	}



	/*****************************************
	*
	*  Database config
	*
	*****************************************/
	
	
	if (ENVIR=='DEV') {
		$database 	= '';
		$username 	= '';
		$password 	= '';
		$host	 	= 'localhost';

	} else {
		$database 	= '';
		$username 	= '';
		$password 	= '';
		$host	 	= 'localhost';
	}
	
		
	/*****************************************
	*
	*  Social Media config
	*
	*****************************************/
	
	//$social = new Object();
	
	//$social->facebook = new Object();
	//$social->