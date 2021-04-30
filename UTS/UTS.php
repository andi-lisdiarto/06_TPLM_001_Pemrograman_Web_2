<!DOCTYPE html>
<html>
<head>
	<title>JAWABAN UTS Pemrograman Web 2</title>
		<style type="text/css">
			.border{border: 2px solid #000;}
		</style>
</head>
<body>

	<header>
		<br><br><br><br><br>
		<h2><center><b>FORM DATA PEMANTAUAN COVID-19</b></center></h2>
	</header>

<form method="post" action="simpan.php">
	<center>
		<table class="border">
			<tr>
				<td>Nama Wilayah </td>
				<td width="20">:</td>
				<td>
					<select name="nama_wilayah">
						<option value="DKI Jakarta">DKI Jakarta</option>
						<option value="Jawa Barat">Jawa Barat</option>
						<option value="Banten">Banten</option>
						<option value="Jawa Tengah">Jawa Tengah</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jumlah Positif </td>
				<td>:</td>
				<td><input type="text" name="jumlah_positif"></td>
			</tr>
			<tr>
				<td>Jumlah Dirawat </td>
				<td>:</td>
				<td><input type="text" name="jumlah_dirawat"></td>
			</tr>
			<tr>
				<td>Jumlah Sembuh  </td>
				<td>:</td>
				<td><input type="text" name="jumlah_sembuh"></td>
			</tr>
			<tr>
				<td>Jumlah Meninggal </td>
				<td>:</td>
				<td><input type="text" name="jumlah_meninggal"></td>
			</tr>
			<tr>
				<td>Nama Operator   </td>
				<td>:</td>
				<td><input type="text" name="nama_operator"></td>
			</tr>
			<tr>
				<td>NIM Mahasiswa   </td>
				<td>:</td>
				<td><input type="text" name="nim_mahasiswa"></td>
			</tr>
			<tr ></tr>
			<tr>
				<td colspan="3" align="center"><button type="submit" name="simpan" value="simpan">SIMPAN</button></td>
		    </tr>
		</table>			
	</center>
</form>
		
</body>
</html>