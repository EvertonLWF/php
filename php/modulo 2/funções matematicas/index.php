<!DOCTYPE html>
<html>
<head>
	<title>funçoes matematicas</title>
</head>
<body>
	<?php 

		echo "função abs<br>".abs(2.8)."<br>";
		echo abs(2.3)."<br>";
		echo abs(-2.8)."<br>";
		echo "<hr>";
		echo "função abs<br>".round(2.8)."<br>";
		echo round(2.3)."<br>";
		echo round(-2.8)."<br>";
		echo "<hr>";
		echo "função ceil<br>".ceil(2.3)."<br>";
		echo ceil(2.2)."<br>";
		echo ceil(2.1)."<br>";
		echo ceil(2.01)."<br>";
		echo ceil(2.000001)."<br>";
		echo "<hr>";
		echo "função floor<br>".floor(2.3)."<br>";
		echo floor(2.2)."<br>";
		echo floor(2.1)."<br>";
		echo floor(2.01)."<br>";
		echo floor(2.000001)."<br>";
		echo "<hr>";
		echo "função rand<br>".rand(2,8)."<br>";
		echo rand(2,5)."<br>";
		echo rand(-2,8)."<br>";
		echo "<hr>";
	 ?>

</body>
</html>