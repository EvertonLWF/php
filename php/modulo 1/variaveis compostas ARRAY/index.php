<!DOCTYPE html>
<html>
<head>
	<title>array</title>
</head>
<body>
	<?php 
		$grupos = array(
			"nome" => "Everton",
			"sobrenome" => "Feijo",
			"idade" => 32,
			"sexo" => "masculino"	
		);

		$produtos = array(
			0 => array(
				"nome"=> "'",
				"quantidade" => "",
				"info" => ""
			),
			1 => array(
				"nome"=> "2",
				"quantidade" => "",
				"info" => ""
			)
		);
		$produtos[] = array(
				"nome"=> "3",
				"quantidade" => "",
				"info" => ""
		);
		print_r($produtos);

	?>
</body>
</html>