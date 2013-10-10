<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title> Tugas Praktikum 2 -BlueNight-</title>
</head>
<body bgcolor='Black'>
<font color = 'Aqua'>

<?php
function tabel($cell, $kolom){
echo '<h3 align="center"> Tabel dengan ' .$cell. ' cell dan ' .$kolom. ' kolom </h3>';
echo '<table align="center" width="30%" border="1">';
$a = ($cell / $kolom) + 1;
$b = 1;
$rw = 0;
$cel = 1;

while ($rw < $a && $cel <= $cell){
echo "<tr>";
$cl = 0;
while ($cl < $kolom){
if ($cel <= $cell){
echo '<td width=""10%>'.$cel.'</td>';
$cel++;
}
$cl++;
}
echo '</tr>';
$rw++;
}
echo '</table>';
}

$x=$_POST['Cells'];
$y=$_POST['Columns'];
tabel($x,$y);
?>

</font>
</body>
</html>
