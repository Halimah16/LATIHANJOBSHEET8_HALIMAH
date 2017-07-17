<html>
<body>
<?php
include_once("koneksi.php");
$kode=2;
$delete=mysql_query("delete from barang where kode='$kode'");

echo "<br><br>";
if($delete)
{echo"berhasil menghapus data barang dengan kode $kode";}
else
{echo"gagal menghapus data";}
?>
</body>
</html>