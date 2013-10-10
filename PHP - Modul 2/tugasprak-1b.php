<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Passing By Reference</title>
</head>

<body>
<h3><p> Passing by Reference </p></h3>
<?php

function jumlah2(&$nilai) {

$nilai++;
}

$input=4;
jumlah2($input);
echo $input;
?>

</body>
</html>
