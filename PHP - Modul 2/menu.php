<html>
<title>WEB - PTI</title>
<head>WELCOME TO PRAKTIKUM PEMROGAMAN WEB
<style type="text/css">
#sa {
	background-color: #0FC;
	text-align: center;
	height: 200px;
	width: 200px;
	border: 3px solid #CCC;
	position: relative;
}
#apDiv1 {
	position: absolute;
	left: 760px;
	top: 53px;
	width: 233px;
	height: 135px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 916px;
	top: 130px;
	width: 212px;
	height: 90px;
	z-index: 1;
}
</style>
</head>
<body bgcolor="#33CCFF">
<?php
session_start();
$nama=$_POST['username'];
$pass=$_POST['password'];
?>
<div id="apDiv2"><label style="font-size:24px"> Nama Pengguna :</label>
<div style=" color:#06F; font-size:24px"><?php echo ($username);?></div></div>

<marquee>Assalamualaikum Wr.Wb. .....:) </marquee>
<p>Hay, My name is AM ROUSAN SHAFIR . Just call me Shadisk</p>
<p>Web ini untuk sarana belajar tentang web server</p>
<li>
<a href="dasar.php">Dasar Dasar PHP - Praktikum Web - Modul 1 </a></li><br>
<li>
<a href="pemrosesan-form.php">Pemrosesan Form - Praktikum Web - Modul 2 </a>
</li>
</body>
</html>

