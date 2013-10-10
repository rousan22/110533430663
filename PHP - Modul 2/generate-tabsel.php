<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
 <html xmlns="http://www.w3.org/1999/xhtml1" xml:lang="en"lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tugas Praktikum 2</title>
</head>
<body bgcolor="Lightskyblue">
<body>
</body>
<table width="50" border="3">
<?php
$k=$_POST['kolom'];
$c=$_POST['cell'];
$b=$c / $k;
$tem=1;
	function print_text($teks, $tab= true){
	echo $tab ? '<tr>'.$teks.'</tr>':'<td>'.$teks.'</td>';}
	for($a=1;$a<=$c;$a++){
	if($tem<=$a){
	print_text();
	print_text($a, false);
	$tem=$tem+$k;}
	else{
		print_text($a, false);}}
 ?>
</table>
</body>
</html>