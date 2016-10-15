<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>Contoh penggunaan MD5 dan SHA1</p>
<p><?php
$kata = "HAFIDZ";
$kata2 = "ADHI";
$kata_md5 = md5($kata);
$kata_sha1 = sha1($kata2);
echo "<br>kata ".$kata;
echo "<br>enkripsi MD5 nya adalah :".$kata_md5; 
echo "<br>kata ".$kata2;
echo "<br>enkripsi SHA1 nya adalah :".$kata_sha1;


?>
</body>
</html>