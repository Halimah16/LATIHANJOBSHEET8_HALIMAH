<html>
<body>
<?php
include_once("koneksi.php");
$insert=mysql_query("INSERT INTO barang (kode,nama,kategori,jumlah,pokok,jual)
		VALUES	('001','Kulkas','Samsung','1','1',2000000'),
				('002','Komputer','Niko','2','1',4000000'),
				('003','AC','Samsung','3','1',3000000'),
				('004','Lemari','Olympic','4','1',3000000'),
				('005','Televisi','Samsung','5','1',4000000'),
				('006','Sepeda','Polygon','6','1',2000000'),
				('007','Motor','Vario','7','1',16000000'),
				('008','Handphone','Nokia','8','1',8000000'),
				('009','Tas','RumahWarna','9','1',250000'),
				('010','Sepatu','HomyPed','10','1',200000')");

echo "<br><br>";
if($insert)
{echo"berhasil menyisipkan data pada tabel barang";}
else
?>
</body>
</html>
