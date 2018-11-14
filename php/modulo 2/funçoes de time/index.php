<!DOCTYPE html>
<html>
<head>
	<title>funçoes time</title>
</head>
<body>
	<?php 
		echo time();  
		echo "<br>";
		echo date('d/m/Y',strtotime("+2 days",time()));

	 ?>

</body>
</html>