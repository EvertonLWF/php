<?php
    ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	$dsn = "mysql:dbname=phpdozero;host=localhost";
		$dbuser = "root";
		$dbpass = "senha5";

		try{
			$pdo = new PDO($dsn,$dbuser,$dbpass);
			echo "conectado ao banco";
			$sql = "SELECT * FROM posts WHERE id = 1";
			//$insert = "INSERT INTO posts SET autor = 'Feijo', corpo = 'teceiro teste', data = '2017/02/02', titulo = 'titulo terceiro teste' ";
			$sql = $pdo->query($sql);
			// $insert = $pdo->query($insert);
			// echo "<br>".$pdo->lastInsertId()."<br>";
			$sql3 = "UPDATE posts SET titulo = 'alterado o titulo'";
			$sql3 = $pdo->query($sql3);
			if($sql -> rowCount() > 0){
				echo "<br>retorno do banco OK<br>";
				foreach ($sql->fetchAll() as $posts) {
					echo "Nome = ".$posts["autor"]."<br>";
				}
			}else{
				echo "<br>nao ha registros <br>";
			}
			
		}catch(PDOException $e){
			echo "<br>Falhou: ".$e->getMessage();

		}



?>