<?php
	require_once("Base.php");
	myHeader();	
	session_start();
	if (!(isset($_SESSION['id']))){
		header("location: http://" . $_SERVER['HTTP_HOST'] . "/lista4/index.php");
		exit;
	}
	
	require_once("sqll.php");
	$transfers = getTransfers($_SESSION['id']);
	
	for($i=0 ; $i<count($transfers) ;$i++){
		echo $transfers[$i]["5"];
		echo "<form>";
		for($j=1 ; $j<5 ;$j++){
			echo "<input type=\"text\" value=\"".$transfers[$i][(string)$j]."\" readonly><br>";
		}
		echo"</form><br>"	;
	}
?>
<a href="userPanel.php">Main page</a>
<?php
	myFooter();
?>