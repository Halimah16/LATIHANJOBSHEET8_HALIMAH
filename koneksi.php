<html>
<head>
<title>Koneksi Database Inventori</title>
</head>
<body>
<b>
<?php
//simpan sebagai file koneksi dengan nama "db_connect.php"
$host='localhost';//nama host server kita,
$username='root';//username database kita,
$password='';//password akses database,
$koneksi=mysql_connect($host,$username,$password);
if($koneksi)
	{ echo"koneksi server berhasil <br><br>";}
else
	{ echo"gagal koneksi ke server <br><br>";}
	
	$database='barang_halimah';//database mysql yang kita gunakan
	$mydb=mysql_select_db($database,$koneksi);
	if($mydb)
		{ echo"berhasil memilih database";}
else
	{ echo"tidak dapat memilih database";}
	
?>
</b>
</body>
</html>
