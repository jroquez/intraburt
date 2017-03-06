<?php
/**
* 
*/
class Session 
{
	
	public static function init(){
		@session_start();
	}
	public static function set($key,$val){
		$_SESSION[$key] = $val;
	}
	public static function get($key){
		return (isset($_SESSION[$key])) ?  $_SESSION[$key] : NULL;
	}
	public static function destroy($key){
	//	unset($_SESSION);
		session_destroy();
	}
}