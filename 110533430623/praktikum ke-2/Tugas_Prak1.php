<!DOCTYPE html>
<html>
	<head>
		<title> Tugas Praktikum 1 - Passing By Value dan By Reference </title>
	</head>
	<body>
		<?php 
			function byvalue($bilangan){
				$bilangan++;
			}
			function byref(&$bilangan){
				$bilangan++;
			}
			
			$masukan = 1;
			$masukan2 = 1;
			byvalue($masukan);
			byref($masukan2);
			echo "Nilai asli = ".$masukan."<br/>";
			echo "Hasil pass by value = ".$masukan."<br/>";
			echo "Hasil pass by reference = ".$masukan2;
		?>
	</body>
</html>
