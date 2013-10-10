<!DOCTYPE html 
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
  <title>Daftar Prodi di Jurusan Teknik Elektro</title> 
</head> 
 
<body> 
 
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    Program Study : 
    <select name="prodi"> 
      <option value="S1PTI">S1PTI 
      <option value="S1PTE">S1PTE 
      <option value="D3ELKA">D3ELKA
      <option value="D3ELTRO"selected="
      <?PHP
	  if ($_post['prodi']=="S1PTI"){
		  echo 'selected="selected"';}
      ?>">D3ELTRO
      <option value="S1PTB">S1PTB
      <option value="S1PTO">S1PTO 
      <option value="S1PTM">S1PTM
      
    </select> <br /> 
 
    <input type="submit" value="ok" /> 
  </form> 
 
<?php 
if (isset($_POST['prodi'])) { 
  echo $_POST['prodi']; 
} 
?> 
<a href="pemrosesan-form.php">Back to Menu Modul 2</a>
</body>
</html>