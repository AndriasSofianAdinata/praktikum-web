<?php
	defined('_VALID') or die('not allowed');
	function init_login() {
		// Simulasi data account nama dan password
		$nama = 'admin';
		$pass = 'admin';
		if (isset($_POST['nama']) && isset($_POST['pass'])) {
			$n = trim($_POST['nama']);
			$p = trim($_POST['pass']);
			if ( ($n === $nama) && ($p === $pass) ) {
				// Jika sama, set cookie
				setcookie('nlogin', $n);
				setcookie('time', time());
				// redireksi
				?>
				<script type="text/javascript">
				document.location.href="./";
				</script>
				<?php
			} else {
				echo '<font color=#ff0000>Nama/Password Tidak Sesuai</font>';
				return false;
			}
		}
	}
	function validate() {
		if (!isset($_COOKIE['nlogin']) || !isset($_COOKIE['time']) ) { 
		?>
		<div class="inner">
			<form action="" method="post">
				<table border=0 cellpadding=5  style="font-family:Aller;color:#000;">
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama" style="border:solid 1px #c0c0c0;padding:7px;color:#000080;"/></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pass" style="border:solid 1px #c0c0c0;padding:7px;"/></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="LOGIN" style="padding:5px;height:40px;width:110px;border:#c0c0c0;background:#c0c0c0;color:#fff;cursor:pointer;"/></td>
					</tr>
				</table>
			</form>
		</div>
		<?php
			exit;
		}
		if (isset($_GET['m']) && $_GET['m'] == 'logout') {
			// Hapus cookie
			if (isset($_COOKIE['nlogin'])) {
				setcookie('nlogin', '', time() - 3 * 3600);
			}
			if (isset($_COOKIE['time'])) {
				setcookie('time', '', time() - 3 * 3600);
			}
			// redireksi halaman
		?>
		<script type="text/javascript">
		document.location.href="./";
		</script>
	<?php
	}
}
?>