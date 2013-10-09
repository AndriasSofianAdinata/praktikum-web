<!DOCTYPE HTML> 
<head> 
<title>Login Form</title> 
<link href="style.css" rel="stylesheet" type="text/css">
	</head> <script type="text/javascript">
		function coba(){ var username=document.getElementById("username"); 
		var password=document.getElementById("password");

		if(username.value==''||password.value==''){ alert('inputan tidak boleh kosong..'); } } 
			</script>

<body bgcolor="#b988b9"> <center>
 
	<div class="content">
	<form name="formlogin" action="<?php $_SERVER['PHP_SELF']; ?>" 
	method="get" onSubmit="coba()"> 
		<br> <font color='#b988b9' size='30'> Login </font>
		<hr/>
		
		<div class="login"> 
		
		<br><p>Username <br><input type="text" name="username" id="username"><br>
  <p>Password <br><input type="text" name="password" id="password">
 <br> <br><input type="submit" name="login" value="login"> </form> 
 
						</center>
 </div></div>

<?php if(isset($_GET['username'])){ $isiusername =$_GET['username']; $isipassword =$_GET['password']; $uname="ahaii"; $pass="ahaii";

$string = 'abcdefghijklmnopqrstuvwxyz'; if(!preg_match("/^[a-zA-Z]+$/", $isiusername)){ echo "<br><p style='#b988b1' align='center'>Username & Password tidak boleh ada angka"; }

if($isiusername==$uname && $isipassword==$pass){ echo "<br><p style='#b988b1' align='center'>Anda Login sebagai : ".$uname; }else{ echo "<br><p style='#b988b1' align='center'>Error!! <br/ > Periksa Username atau Password "; } } ?> 
</body> </html>