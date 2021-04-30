<?php

  $date = date_default_timezone_set("Asia/Jakarta");
  $waktu = date('d F Y H:i:s');
  $wilayah  = $_POST['nama_wilayah']; 
  $positif = $_POST['jumlah_positif'];
  $dirawat  = $_POST['jumlah_dirawat']; 
  $sembuh = $_POST['jumlah_sembuh']; 
  $meninggal = $_POST['jumlah_meninggal'];
  $operator = $_POST['nama_operator'];
  $nim = $_POST['nim_mahasiswa'];
 
    $db = "<br><br><br>
 		       <center> Data pemantauan Covid19 wilayah $wilayah
 		       <br>Per $waktu
 		       <br>$operator / $nim
 		       <br><br>
 		        <table border='1'>
              <tr>
                <th>&nbsp; Positif &nbsp;</th>
                <th>&nbsp; Dirawat &nbsp;</th>
                <th>&nbsp; Sembuh &nbsp;</th>
                <th>&nbsp; Meninggal &nbsp;</th>
              </tr>
        			<tr>
                <td align='center'>$positif</td>
                <td align='center'>$dirawat</td>
                <td align='center'>$sembuh</td>
                <td align='center'>$meninggal</td>
     	        </tr>
 		         </table>
 		       </center>";

  $data = fopen("db.html", "a");
  fwrite($data, $db);
  fclose($data);

  echo "<script>alert('Data Berhasil disimpan');history.go(-1);</script>";
?>


