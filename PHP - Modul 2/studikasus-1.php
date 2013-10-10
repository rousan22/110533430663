<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<title>Greeting</title> 
</head> 
<body> 
<?php  
echo "<h1>Menampilkan format tanggal dengan PHP</h1>";  
$tanggal=date("d-m-y h:i:s",time());  
print "tanggal dan waktu adalah <b>$tanggal</b>";  
?>  
</body> 
</html>