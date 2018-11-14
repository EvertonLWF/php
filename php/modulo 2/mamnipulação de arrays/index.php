<!DOCTYPE html>
<html>
<head>
	<title>manipulação de arrays</title>
</head>
<body>
	<?php 
		$array = array(
			"nome" => "Everton",
			"idade" => "32",
			"cidade" => "Sao lourenco do sul",
			"pais" => "Brasil"
		);

		$x = array_keys($array);
		$z = array_values($array);
		//array_pop($array);
		//array_shift($array);
		asort($array);
		//arsort($array);
		echo "total = ".count($array)."<br>";
		if(in_array("32", $array)){
			echo "<br>tem no array<br>";
		}
		print_r($x);
		echo "<br>";
		print_r($z);
		echo "<br>";
		print_r($array);
	?>
</body>
</html>