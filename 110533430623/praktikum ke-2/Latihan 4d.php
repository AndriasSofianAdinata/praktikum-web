<!DOCTYPE html>
<html>
	<head>
		<title>Seleksi Switch</title>
	</head>
	<body>
		<?php
			$i = 0;
			if($i == 0){
				echo "i equals 0";
			} else if($i == 1){
				echo "i equals 1";
			} else if($i == 2){
				echo "i equals 2";
			}
			
			//Ekuivalen, dengan pendekatan switch
			switch($i){
				case 0:
					echo "i equals 0";
				break;
				case 1:
					echo "i equals 1";
				break;
				case 2:
					echo "i equals 2";
				break;
			}
		?>
	</body>
</html>