<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Limitasi Data</title>
</head>

<body>
<form name="frm_select" method="post" action="">
  Tampilkan
  <select name="row_page" onchange="document.forms.frm_select.submit();"> <!--value diganti jika di klik submit-->
  <option>-- pilih --</option>
  <option value="5">5</option>
  <option value="10">10</option>
  <option value="20">20</option>
  <option value="50">50</option>
  <option value="100">100</option>
  </select> baris per halaman.
 </form>
 
 <?php
 if (isset($_POST['row_page']) && $_POST['row_page']) {
         require_once './koneksi.php';
//LENGKAPI
//Variabel $sql berisi pernyataan SQL retrieve dengan limitasi
        $row = $_POST['row_page'];                        
                                         
         $sql = 'SELECT * FROM mahasiswa LIMIT ' .$row; //membatasi seleksi data sebanyak jumlah value yang dipilih
         $res = mysql_query($sql); //eksekusi pernyataan sql
         
         //menampilkan hasil
         if($res) { ?>
                 <table border="1" cellpadding="5" cellspacing="1">
        <tr>
                <th>#</th>
            <th width="100">NIM</th>
            <th width="150">Nama</th>
            <th>Alamat</th>
         </tr>
               <?php
         $i=1;
                 while($row=mysql_fetch_row($res)){?>
                                                                <tr>
                                                                        <td><?php echo $i;?></td>
                                                                        <td><?php echo $row[0];?></td> <!--menampilkan data pada index 0-->
                                                                        <td><?php echo $row[1];?></td> <!--menampilkan data pada index 1-->
                                                                        <td><?php echo $row[2];?></td> <!--menampilkan data pada index 2-->
                                                                </tr>
                                                                <?php
                                                                $i++;
                                                        }
                                                        ?>
                                                </table>
                                                <?php
                                        }else{
                                                echo 'Data Tidak Ditemukan';
                                        }
                                }
                        
 ?>
</body>
</html>