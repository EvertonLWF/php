<!DOCTYPE html>
<html>
<head>
	<title>new</title>
</head>
<body>
	<?php 
		function calculaValor($y,$x,$sinal){
			switch ($sinal) {
				case 0:
					$res = $y+$x;
					return $res;
					break;
				case 1:
					$res = $y-$x;
					return $res;
					break;
				case 2:
					$res = $y/$x;
					return $res;
					break;
				case 3:
					$res = $y*$x;
					return $res;
					break;				
				default:
					echo "Opção invalida";
					break;
				
			}
		}
	 ?>
	 <form method="POST">
	 	valor 1
	 	<input type="text" name="y">
	 	<select name="z">
	 		<option value="0">Somar</option>
	 		<option value="1">Subtrair</option>
	 		<option value="2">Dividir</option>
	 		<option value="3">Multiplicar</option>
	 	</select>
	 	valor 2
	 	<input type="text" name="x">
	 	<input type="submit" value="calcular"><br>
	 	Resposta :
	 </form>
	 <?php 
	 	if(isset($_POST['y']) && !empty($_POST['y'])){
	 		$y = $_POST['y'];
	 		$x = $_POST['x'];
	 		$z = $_POST['z'];
	 		intval($y);
	 		intval($x);
	 		intval($z);
	 		$res = calculaValor($y,$x,$z);
	 		echo $res;
	 	}

	  ?>

</body>
</html>