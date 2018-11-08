<!DOCTYPE html>
<html>
<head>
	<title>new</title>
</head>
<body>
	<?php 
		if (isset($_POST['email'])&&!empty($_POST['email'])){
			$email = $_POST['email'];
			echo "O usuario ".$email." enviou dados";			
		}else{

		}
	?>
	<hr>
	<form method="POST">
		<input type="email" name="email" placeholder="Email"><br><br>
		<input type="password" name="senha" placeholder="Senha"><br><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>