<!DOCTYPE html>
<html>
<head>
	<title>new</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="numero">
		<input type="submit" value="verificar">
	</form>
	<?php
		if (isset($_POST['numero']) && !empty($_POST['numero'])) {
			$x = $_POST['numero'];
		} else {
			$x = -1;
		}
		

		switch ($x) {
			case 0:
				echo "x eh iqual a zero!!!";
				break;
			case 1:
				echo "x eh iqual a um!!!";
				break;
			case 2:
				echo "x eh iqual a dois!!!";
				break;
			default:
				echo "x não eh nenhum valor";
				break;
		}
	?>
</body>
</html>