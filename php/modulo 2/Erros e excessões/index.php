<!DOCTYPE html>
<html>
<head>
	<title>erros e excessões</title>
</head>
<body>
	<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);

	echo substr(1,2,3,4,5);

	?>

</body>
</html>