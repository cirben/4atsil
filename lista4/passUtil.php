<?php
	require_once("sqll.php");

	function saltPassword($pass){
		$salt = rand(22,2222);
		$protect_form = $salt . hash('sha256', $salt.$pass); 
		return $protect_form;
	}
	
	function checkPassword($login, $password){
		$user_data = getPass($login);
		$hash = substr($user_data[0]['password'], strlen($user_data[0]['password'])-64, 64);
		$salt = substr($user_data[0]['password'], 0, strlen($user_data[0]['password'])-64);
		return hash('sha256', $salt.$password) == $hash;
	}
?>