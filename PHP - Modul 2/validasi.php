<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>
  <?PHP
$nama=$_POST['username'];
$pass=$_POST['password'];
if ($nama=="sha" && $pass=="123"){
	echo '<p  align="center" style="font-size:24px; color:#03F; font-stretch:inherit"> login berhasil</p>';
	include ("menu.php");}
else {
	echo '<p align="center" style="font-size:24px; color:#F00; font-stretch:inherit"> login gagal </p>';
	include ("login.php");}	
?>
<p style=" color:#03F">
</body>
</html>