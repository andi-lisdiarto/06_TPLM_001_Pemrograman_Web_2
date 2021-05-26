<head>
<title>Buku Tamu</title>
</head>
<center>
<body>
<table border=1>
<?php
if (isset($_POST['save'])) 
{	
	$nama=$_POST['name'];
	$telepon=$_POST['telp'];
	$email=$_POST['email'];
	$alamat=$_POST['address'];
	$pesan = $_POST['msg'];

	if (($nama!="") && ($telepon!="") && ($email!="") && ($alamat!="") && ($pesan!=""))
	{
	 $koneksi=mysqli_connect("localhost","root","");
	 if (!$koneksi)
	 {
	 die('Could not connect: ' . mysqli_error($koneksi));
	 }
	 mysqli_select_db($koneksi, "datatamu");
	 $sql ="INSERT INTO tbl_tamu (name, telp, email, address, msg)
			VALUES
			('$nama','$telepon','$email','$alamat','$pesan')";
	 $hasil = mysqli_query ($koneksi, $sql);
	}
	echo '<script language="javascript">alert("Terima Kasih, Data Anda berhasil Disimpan !"); document.location="index.php";</script>';
}
	
?> 