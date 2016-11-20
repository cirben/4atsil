<?php
require_once("MyDatabase.php");

function getTransfers($login){
	return myDbSelect(myDB(), "SELECT  `0`, `1`, `2`, `3`, `4`, `5` FROM transfers WHERE `0`='". $login."' ORDER BY `5` DESC");
}

function loginExists($login){
	return myDbSelect(myDB(),"SELECT login FROM Users WHERE login='". $login."'") != null; 
}

function addUser($login, $password){
	myDB() -> query("INSERT INTO `Users`(`login`, `password`) VALUES ('".$login."','".$password."')");
}

function getPass($login){
	return myDbSelect(myDB(),"SELECT password FROM Users WHERE login='". $login."'");
}

function addToHistory($login, $recipient, $recipientacc, $amount, $title){
	myDB() -> query("INSERT INTO `transfers`(`0`, `1`, `2`, `3`, `4`, `5`) VALUES ('".$login."','".$recipient."','".$recipientacc."','".$amount."','".$title."',NOW())");
}
?>