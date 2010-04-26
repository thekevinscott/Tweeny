<?php
	class tweenyDatabase
	{
		function __construct($host,$user,$pass,$db) {
			$this->mysql = new mysqli($host,$user,$pass,$db);
			
		}
		function get($query) {
			
		}
	}