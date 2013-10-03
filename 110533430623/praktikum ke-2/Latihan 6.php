<!DOCTYPE html>
<html>
	<head>
		<title>Fungsi dan Prosedur</title>
	</head>
	<body>
		<?php 
			//contoh prosedur
			function do_print(){
				// Mencetak informasi timestamp
				echo time();
			}
			//memanggil prosedur
			do_print();
			echo '<br/>';
			//Contoh fungsi penjumlahan 
			function jumlah($a,$b){
				return($a + $b);
			}
			echo jumlah(2,3);
			//Output: 5
		?>
	</body>
</html>
