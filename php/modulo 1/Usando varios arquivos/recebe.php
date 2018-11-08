<?php 
	if (isset($_POST['email']) && !empty($_POST['email'])) {
			$email = $_POST['email'];
			echo "Email = ".$email."<br>Senha = ".$senha;
		}
?>