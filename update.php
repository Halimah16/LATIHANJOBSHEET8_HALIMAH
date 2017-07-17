<html>
<body>
<?php
include_once("koneksi.php");
$update=mysql_query("update barang set nama='Handphone' where kode=008");

echo "<br><br>";
if($update)
{echo"berhasil mengupdate data pada tabel barang";}
else
{echo"gagal mengupdate data";}
?>
</body>
</html>