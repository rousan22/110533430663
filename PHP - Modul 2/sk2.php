<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
 <html xmlns="http://www.w3.org/1999/xhtml1" xml:lang="en"lang="en">
<head>
<title>SK2</title>
</head>
<body>
<form method="POST" action="tabele.php">
<h3 align="left" class="style1">Generate Matriks Cell</h3>
<table width="327" align="center" border="0" bgcolor="#FFFFFF">
<B align="center">Column :
<input name="kolom" type="text" id="kolom" onKeyUp="getmax();" onfocus="this.select();">
<B>Cell :
<input name="baris" type="text" id="baris" onKeyUp="getmax();" onfocus="this.select();">
<br />
<input type="submit" name="Generate" value="Generate">
<input type="reset" name="Reset" value="Clear">
</div>
</form>

</body>
</html>