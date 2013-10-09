<html>
<head>
	<title>Studi Kasus: Preselecting pada Seleksi</title>
</head>
<body>
	<h2>Daftar Harga Mobil</h2>
	<hr>
	<br>
	<em>Silakan pilih nama mobil yang dicari</em>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<select name="mbl">
			<option value="jazz" 
			<?php if (isset($_POST['mbl'])&&$_POST['mbl']=='jazz') {
				echo "selected";
			} ?>
			>jazz</option>
			<option value="xenia" 
			<?php if (isset($_POST['mbl'])&&$_POST['mbl']=='xenia') {
				echo "selected";
			} ?>>xenia</option>
			<option value="avanza" 
			<?php if (isset($_POST['mbl'])&&$_POST['mbl']=='avanza') {
				echo "selected";
			} ?>
			>avanza</option>
			<option value="L300" 
			<?php if (isset($_POST['mbl'])&&$_POST['mbl']=='L300') {
				echo "selected";
			} ?>
			>L300</option>
			
		</select>
		<br>
		<input type="submit" value="OK">
	</form>
	<?php 
	if (isset($_POST['mbl'])) {
		switch ($_POST['mbl']) {
			case 'jazz':
				echo "<div id='harga'>harga honda jazz: 224 Jt </div>";
				break;

			case 'xenia':
				echo "<div id='harga'>harga daihatsu xenia : 200 Jt</div>";
				break;

			case 'avanza':
				echo "<div id='harga'>harga toyota avanza : 215</div>";
				break;

			case 'L300':
				echo "<div id='harga'>harga mitsubishi L300 : 500 Jt</div>";
				break;

				
			default:
				# code...
				break;
		}
	}
	 ?>

</body>
</html>