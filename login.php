<?php
session_start();
$username = $_POST['username'];
$password = sha1($_POST['password']);
$koneksi = mysqli_connect("localhost", "root", "", "users");

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' and password='$password' ");

$jumlah = mysqli_num_rows($query);
  
if($jumlah == 1){
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	 echo "<script>
	 	  alert('Login Sukses. .');
		  window.location = 'beranda.php';
		  </script>";
	
}else{
		echo "<script>
	
	 	  alert('Login Gagal. ks.');
		  window.location = 'form3.html';
		  </script>";

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.tabel {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 36px;
	height: 200px;
	width: 500px;
	border-radius: 5px;
	border: 10px solid #F60;
	color: #FFF;
}
.tombol {
	width: 100px;
	height: 50px;
	background-color: #F60;
	border-top-width: 2px;
	border-right-width: 2px;
	border-bottom-width: 2px;
	border-left-width: 2px;
	border-top-color: #FFF;
	border-right-color: #FFF;
	border-bottom-color: #FFF;
	border-left-color: #F;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
	color: #FFF;
}
.tombol:hover {
	width: 100px;
	height: 50px;
	background-color: #FFF;
	border-top-width: 2px;
	border-right-width: 2px;
	border-bottom-width: 2px;
	border-left-width: 2px;
	border-top-color: #F60;
	border-right-color: #F60;
	border-bottom-color: #F60;
	border-left-color: #F60;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
	color: #F60;
}
.inputan {
	font-family: Tahoma, Geneva, sans-serif;
	height: 40px;
	width: 500px;
	border: 2px double #F60;
	font-size: 20px;
	}
\
</style></head>

<body bgcolor="#FF6600">
<p class="body">&nbsp;</p>
<div align="center">
  <table width="352" height="275" border="0" class="tabel">
    <form id="form1" name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
      <tr>
        <td><div align="center">Want to Connect?</div></td>
      </tr>
      <tr>
        <td><label for="textfield2"></label>
          <div align="left">
            <input type="username" name="username" id="textfield2" placeholder="username" class="inputan" required="required" />
          </div></td>
      </tr>
      <tr>
        <td><label for="textfield3"></label>
          <div align="left">
            <input type="password" name="password" id="textfield3" placeholder="password" class="inputan" required="required" />
          </div></td>
      </tr>
      <tr>
        <td><div align="left">
          <input type="submit" name="button" id="button" value="LOGIN" class="tombol" />
        </div></td>
      </tr>
    </form>
  </table>
</div>
<p>&nbsp;</p>
</body>
</html>
