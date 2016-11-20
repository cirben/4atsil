<?php
	session_start();
	if (!(isset($_SESSION['id']))){
		header("location: http://" . $_SERVER['HTTP_HOST'] . "/lista4/index.php");
		exit;
	}
	require_once("Base.php");
	myHeader();
?>
<div>
<p><a href="logout.php">log out</a></p>
<p><a href="transferPage.php">transfer some cash</a></p>
<p><a href="history.php">transfer history</a></p>
</div>
<?php
	myFooter();
?>