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
	function getadmin($id){
		$query = "SELECT * FROM admin WHERE id=$id";
		$result = get($query);
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
?>