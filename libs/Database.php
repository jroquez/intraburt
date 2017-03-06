<?php
/**
* 
*/
class Database extends PDO
{
	
	function __construct()
	{
		# code...
		parent::__construct('mysql:host=192.168.150.123;dbname=rox','jroquez','abril,1977.');
	}
}