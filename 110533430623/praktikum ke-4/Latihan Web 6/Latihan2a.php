<?php
	// Inisialisasi data session
	session_start();
	// Set session jika belum ada
	if (isset($_SESSION['test'])) {
		// Hapus session test
		unset($_SESSION['test']);
		echo 'session dihapus';
	} else {
		echo 'unset';
		// Mencetak semua elemen session
		print_r($_SESSION);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Hapus Session</title>
	</head>
	<body>
		<p> Tekan Refresh (F5); </p>
	</body>
</html>