<?php
      $acc_user = 'admin';
      $acc_pas = 'admin';
      if (isset($_POST['login']))
      $username = $_POST['username'];
      $password = $_POST['password'];
      $username = strip_tags($username);
      $password = strip_tags($password);
     
	 
         if (($username==$acc_user) && ($password==$acc_pas))
			  {
			  session_start();
			  $_SESSION['user'] = $username;
			  echo 'Login Sukses!'.
			  '<br/>'.
			  '<a href="index.php">Next</a>'.
			  '<br/>';
			  } else

			  {
				  echo 'Username dan password salah'.
				  '<br/>'.
				  '<a href="login.php">Try again</a>'.
				  '<br/>';
				  }
?>