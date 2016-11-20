<?php
require_once("sqll.php");
require_once("passUtil.php");

session_start();

if (!(isset($_POST['login']) and isset($_POST['password']))){
	header("location: http://" . $_SERVER['HTTP_HOST'] . "/lista4/index.php");
	exit;
}

if (isset($_POST['loginflag'])){
	$login = (string)$_POST['login'];
	$password = (string)$_POST['password'];
	if(!checkPassword($login, $password)){
		header("location: http://" . $_SERVER['HTTP_HOST'] . "/lista4/index.php");
		exit;
	}
	$_SESSION['id'] = $login;
	header("location: http://" . $_SERVER['HTTP_HOST'] . "/lista4/userPanel.php");
	exit;
} 
else if(isset($_POST['registerflag'])){
	$login = (string)$_POST['login'];
	$password = (string)$_POST['password'];
	if(loginExists($login)){
		header("location: http://" . $_SERVER['HTTP_HOST'] . "/lista4/index.php");
		exit;
	}
	addUser($login, saltPassword($password));
	$_SESSION['id'] = $login;
	header("location: http://" . $_SERVER['HTTP_HOST'] . "/lista4/userPanel.php");
	exit;
}
else{
	header("location: http://" . $_SERVER['HTTP_HOST'] . "/lista4/index.php");
	exit;
}
?>