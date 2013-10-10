<?php
	

$baris = 10;

$kolom = 3;

	
echo"
	BARIS: $baris
	
<br/>
	
KOLOM: $kolom
	
<br/> 
	";
	

$s = $baris/$kolom;
	
$w = $baris%$kolom;
	
echo"<table>";
	
$num = 1;	
	
	for($a=1; $a<=$s; $a++){
	
		echo"<tr>";	
		
	for($b=1; $b<=$kolom; $b++){
		echo"<td> $num <td>";
			
$num++;	
		
}
echo"</tr>";
	}
	
	if($w>0)
{		
		echo"<tr>";
		
	
	for($b=1; $b<=$w; $b++){
	
		echo"<td> 
$num <td>";
		
	$num++;	
		}
	
	echo"</tr>";
	}
		

	echo"</table>";
?>

<style>


td{
	
border: solid 3px;
	
padding: 1px 15px 1px 15px; 

}
</style>
