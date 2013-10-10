<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Passing By Value</title>
</head>

<body>
<h3><p> Passing by Value </p></h3>

<?php

function jumlah($nilai) {
	
$nilai++;
}

$input=4;

jumlah($input);
echo $input;

?>
</body>
</html>
