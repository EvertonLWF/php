<!DOCTYPE html>
<html>
<head>
	<title>manipulação de textos</title>
</head>
<body>
	<?php 
		$nome = "everton feijo";
		$x = explode(" ", $nome);
		$y = implode(" ", $x);
		$z = number_format(8673247.3274923, 2 ,".",",");
		$a = str_replace("feijo", "luis", $nome);
		print_r($x);
		echo "<br>".$z;
		echo "<br>".$y;
		echo "<br>".$a;
		echo "<br>".strtolower($a);
		echo "<br>".strtoupper($a);
		echo "<br>".substr($a, 2,5);
		echo "<br>".ucfirst($a);
		echo "<br>".ucwords($a);



	?>

</body>
</html>