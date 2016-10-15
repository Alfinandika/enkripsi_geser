<?php
if(isset($_POST['kata'])) {
	$kata = $_POST['kata'];
	$enkripsi = base64_decode($kata);
	echo "denkripsi dari: ".$kata;
	echo "<br>";
	echo "adalah ".$enkripsi;
	}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  Masukkan Kata 
  <label for="kata"></label>
  <input type="text" name="kata" id="kata" />
  <input type="submit" name="button" id="button" value="Enkripsi" />
</form>
</body>
</html>