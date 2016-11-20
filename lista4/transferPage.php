<?php
	session_start();
	if (!(isset($_SESSION['id']))){
		header("location: http://" . $_SERVER['HTTP_HOST'] . "/lista4/index.php");
		exit;
	}
	require_once("Base.php");
	myHeader();
?>

<h2>Transfer info</h2>

<form action="infoCheck.php" method="post">
	<input type="text" name="1" placeholder="recipient name"><br>
	<input type="text" name="2" placeholder="recipient's acc number"><br>
	<input type="text" name="3" placeholder="amount"><br>
	<input type="text" name="4" placeholder="title"><br>
	<input type="submit" value="Info check">
</form>
<br>

<?php
	myFooter();
?>