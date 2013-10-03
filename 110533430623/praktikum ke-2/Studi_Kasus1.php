<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Studi Kasus 1</title>
	</head>

	<body>
		<?	
			function greeting($jam){
				if ($jam >= 00 and $jam < 10 ){   
   					$greet="Selamat Pagi BRO !!";   
  				}else if ($jam >= 10 and $jam < 15 ){   
   					$greet="Selamat Siang BRO !!";  
 				}else if ($jam >= 15 and $jam < 18 ){   
   					$greet="Selamat Sore BRO !!";      
 				}else if ($jam >= 18 and $jam <= 24 ){   
   					$greet="Selamat Malam BRO !!";     
 				}else {   
  					$greet="soli bloo ! sistem rusak !!";  
	 			}  
 				return $greet; 
			}
	
			date_default_timezone_set('Asia/Jakarta');
			$waktu = date("H");
			$waktuu = date ("h");
			echo '<h1>' .greeting($waktu). '</h1';
			echo '<br /><h3>sekarang jam ' .$waktu.' WIB, atau jam '.$waktuu.' WIB Broo!!</h3>' ;
			
		?>
	</body>
</html>
