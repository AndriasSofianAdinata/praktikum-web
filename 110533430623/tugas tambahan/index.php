<!DOCTYPE html>
<head>
<title>tugas kalkulator</title>
<script>
function cekhuruf(huruf){
                                cek = /^[A-Za-z]{1,}$/;
                                return cek.test(huruf);
                        }

function validateForm(form)
{
var bil1=form.bil1.value;
var bil2=form.bil2.value;

if ((bil1==null || bil1=="")||(bil2==null|| bil2==""))
  {
  alert("Kedua inputan harus diisi");
   form.bil1.focus();
  return false;
  }
  
  if(cekhuruf(bil1)=== true ||cekhuruf(bil2)===true)
  {
          alert("Kedua inputan harus berupa angka");
           form.bil1.focus();
          return false;
  }


 
  return true;
}
</script>
</head>

<body>
<form name="kalForm" method ="post" action = "rumus.php" onSubmit="return validateForm(this)">
<tr>
                <font color="#000000>
<blink>        <h2>
<center>
<p>KALKULATOR</p>
</center>
</h2>
</blink>
</font>
        
<center>
<table width="348">
<tr>
<td colspan="5"><center>
<table width="342">
<tr>
<td>angka 1:</td>
<td><input size="16" name="bil1" type="text" /></td>
</tr>
<tr>
<td>angka 2:</td>
<td><input size="16" name="bil2" type="text" /></td>
</tr>
<tr>
<td>Hasil    :</td>
<td><input size="16" name="bil3" type="text" value="<?php if (isset($_GET['bil3'])) echo $_GET['bil3']?>" /></td>
</tr>
</table>
</center>
</td>
</tr>
<center>
<tr><td width="31"><input value="+" type="submit" name ="tambah" /></td>
<td width="27"><input value="-" type="submit" name = "kurang" /></td>
<td width="31"><input value="*" type="submit" name = "kali" /></td>
<td width="27"><input value="/" type="submit" name = "bagi" /></td>
<br><td width="94"><input value="Hapus Data" type="submit" name = "input" /></td>
</tr>
</center>
</table>
</center>
</form>
</body>
</html>