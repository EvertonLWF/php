<!DOCTYPE html>
<html>
<head>
	<title>foreach</title>
</head>
<body>
	<?php 

		$var = array("A","B","C","D");
		$array = array(
			array("aluno"=>"feijo","idade"=>"10"),
			array("aluno"=>"fulano","idade"=>"12"),
			array("aluno"=>"ciclano","idade"=>"11")
		);
		$aluno = array(
			"nome" => "Feijo",
			"idade" => 90,
			"estado" => "RS",
			"pais" => "Br"
		);
		foreach ($var as $key) {
			echo "tipo = ".$key."<br>";
		}
		echo "<hr>";
		
		foreach ($array as $key) {
			echo "Aluno = ".$key["aluno"]." idade = ".$key["idade"]."<br>";
		}
		echo "<hr>";
		foreach ($aluno as $key => $value) {
			echo $key." = ".$value."<br>";
		}


	?>
</body>
</html>