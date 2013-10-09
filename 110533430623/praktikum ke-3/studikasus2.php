<html>
<head>
	<title>Studi Kasus 2: Prefilling pada Checkbox</title>
</head>
<body>
	<h1>Dealer Mobil</h1>
	<div id='info'>Sistem Informasi Pembelian Mobil</div>
	<em>Pilih Mobil yang akan dibeli :</em>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="checkbox" name="mbl[]" value="Jazz" 
		<?php if (isset($_POST['mbl'])) {

			foreach ($_POST['mbl'] as $key => $value) {
				if ($value=='Jazz') {
					echo "checked";
				}
		}
			
		} ?>
		>Honda Jazz<br>
		<input type="checkbox" name="mbl[]" value="Xenia" 
		<?php if (isset($_POST['mbl'])) {

			foreach ($_POST['mbl'] as $key => $value) {
				if ($value=='Xenia') {
					echo "checked";
				}
		}
			
		} ?>
		>Daihatsu Xenia<br>
		<input type="checkbox" name="mbl[]" value="Avanza"
		<?php if (isset($_POST['mbl'])) {

			foreach ($_POST['mbl'] as $key => $value) {
				if ($value=='Azanza') {
					echo "checked";
				}
		}
			
		} ?>
		>Toyota Avanza<br>
		<input type="checkbox" name="mbl[]" value="L300"
		<?php if (isset($_POST['mbl'])) {

			foreach ($_POST['mbl'] as $key => $value) {
				if ($value=='L300') {
					echo "checked";
				}
		}
			
		} ?>
		>Mitsubishi L300<br>
		<input type="submit" value="OK">
	</form>
	<?php 
	if (isset($_POST['mbl'])) {
		echo "<div id='pilihan'>Rencana mobil yang anda beli:</div><br/>";
		echo "<ul>";
		foreach ($_POST['mbl'] as $key => $value) {
			echo "
			<li>".$value."</li>
			";
		}

		echo "</ul>";
	}
	 ?>

</body>
</html>