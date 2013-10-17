<?php
//————————— pengambilan isi variable ———————–
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operator = $_POST['operator2'];

//—————————- proses hitung ————————–
if ($operator == '+')
{
$hasil = $angka1+$angka2;
}
if ($operator == '-')
{
$hasil = $angka1-$angka2;
}
if ($operator == '*')
{
$hasil = $angka1*$angka2;
}
if ($operator == '/')
{
$hasil = $angka1/$angka2;
}

// —– url redirect sekaligus mengrimkan variable hasil ———
header ("location:calc.php?hasil1=$hasil");
?>