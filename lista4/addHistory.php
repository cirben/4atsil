<?php

	require_once("sqll.php");
	session_start();

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
	
	addToHistory($_SESSION['id'], $_POST['1'], $_POST['2'], $_POST['3'], $_POST['4']);
?>

<form id="toBank" action="bankTransfer.php" method="post">
	<input type="hidden" name="1" value="<?php echo $_POST['1']?>" readonly><br>
	<input type="hidden" name="2" value="<?php echo $_POST['2']?>" readonly><br>
	<input type="hidden" name="3" value="<?php echo $_POST['3']?>" readonly><br>
	<input type="hidden" name="4" value="<?php echo $_POST['4']?>" readonly><br>
</form>

<script>
	document.getElementById("toBank").submit();
</script>