<?php
if(isset($_POST['kalimat'])) {
	$kalimat = $_POST['kalimat'];
	$geser = $_POST['geser'];
	$hasil = "";
	for ($i = 0; $i < strlen($kalimat); $i++){
	$huruf = ord($kalimat[$i]);
	$huruf += $geser;
	$hasil .= chr($hr=$huruf) ;
	}
	echo "<h1> $hasil</h1>";
	exit();
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>ENKRIPSI GESER</p>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="textfield">tambahkan kalimat </label>
    <input type="text" name="kalimat" id="textfield" />
  </p>
  <p>
    <label for="select"></label>
    <select name="geser" size="1" id="geser">
      <option value="1">kanan1</option>
      <option value="2">kanan2</option>
      <option value="3">kanan3</option>
      <option value="-1">kiri1</option>
      <option value="-2">kiri2</option>
      <option value="-3">kiri3</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Proses" />
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>