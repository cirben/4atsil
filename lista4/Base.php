<?php
$HEADER =<<<EOT
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
<div id="main">
EOT;

$FOOTER =<<<EOT
</div>
</body>
</html>
EOT;

function myHeader(){
	global $HEADER;
	echo $HEADER;
}

function myFooter(){
	global $FOOTER;
	echo $FOOTER;
}
?>