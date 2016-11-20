<?php
	if(isset($_SESSION['id'])){
		header("location: http://" . $_SERVER['HTTP_HOST'] . "/lista4/userPanel.php");
		exit;
	}
	require_once("Base.php");	
	myHeader();
?>

<b>Welcome to wBank!</b>
<br>
<form action="login.php" method="post">
	<input type="text" name="login" placeholder="login">
	<br>
	<input type="password" name="password" placeholder="password">
	<br>
	<input type="submit" name="loginflag" value="log in">
	or
	<input type="submit" name="registerflag" value="register">
</form>

<?php
	myFooter();
?>