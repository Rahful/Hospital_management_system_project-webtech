<?php
	require_once 'models/db_config.php';
	
	function getAllAdmin(){
		$query = "SELECT * FROM admin";
		$result = get($query);
		return $result;
	}
	function getAllusers(){
		$query = "SELECT * FROM users";
		$result = get($query);
		return $result;
	}
	function getAllAccountant(){
		$query = "SELECT * FROM accountant";
		$result = get($query);
		return $result;
	}
	function getAlldoctor(){
		$query = "SELECT * FROM doctor";
		$result = get($query);
		return $result;
	}
	
	
?>