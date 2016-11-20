<?php 
	session_start();
	if(!isset($_SESSION['id'])){
		header("location: http://" . $_SERVER['HTTP_HOST'] . "/lista4/index.php");
		exit;
	}
	unset($_SESSION['id']);
	require_once("Base.php");
	myHeader();
?>
	<h2>Farewell!</h2>
<?php
	myFooter();
	header( "refresh:2;url=http://" . $_SERVER['HTTP_HOST'] . "/lista4/index.php");
?>