<?php
	session_start();
	require_once("Base.php");
	myHeader();
?>

<h2>Please check transfer info</h2>

<?php
	if (!(isset($_SESSION['id']))){
		header("location: http://" . $_SERVER['HTTP_HOST'] . "/lista4/index.php");
		exit;
	}
	for($i=1 ; $i<=4 ; $i++){
		if(!(isset($_POST[(string)$i]))){
			header("location: http://" . $_SERVER['HTTP_HOST'] . "/lista4/userPanel.php");
			exit;
		}
	}
?>

<form action="addHistory.php" method="post">
	<input type="text" name="1" value="<?php echo $_POST['1']?>" readonly><br>
	<input type="text" name="2" value="<?php echo $_POST['2']?>" readonly><br>
	<input type="text" name="3" value="<?php echo $_POST['3']?>" readonly><br>
	<input type="text" name="4" value="<?php echo $_POST['4']?>" readonly><br>
	<input type="submit" value="Transfer!">
</form>	

<?php
	myFooter();
?>