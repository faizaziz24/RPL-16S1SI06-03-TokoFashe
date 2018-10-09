<?php
include "library/config.php";
include "library/koneksi.php";

include"inc.session.php";

// Baca Kode Pelanggan yang Login
$KodePelanggan	= $_SESSION['SES_PELANGGAN'];

if((isset($_GET['kodebr']) AND isset($_GET['kodebhn'])) AND isset($_GET['kodesz'])) {

	//baca kode 
	$kodebr	= $_GET['kodebr'];
	$kodebhn= $_GET['kodebhn'];
	$kodesz = $_GET['kodesz'];

	$query1	= mysql_query("SELECT * FROM stock WHERE (kd_barang='$kodebr' AND kd_bahan='$kodebhn') AND kd_ukuran='$kodesz'");

	$cekr	= mysql_fetch_array($query1);
	$kodein	= $cekr['kd_invent'];

	$query2 = mysql_query("SELECT * FROM tmp_pembelian WHERE kd_invent='$kodein' AND kd_pelanggan='$KodePelanggan'");

	if(mysql_num_rows($query2) >=1) {
		// Jika barang sudah pernah dipilih, maka update saja jumlah barangnya (+1)
		$mysql = "UPDATE tmp_pembelian SET jumlah=jumlah + 1 WHERE kd_invent='$kodein' AND kd_pelanggan='$KodePelanggan'";

	}else{
		// Jika barang belum pernah dipilih, maka tambahkan baris baru ke keranjang
		$query3 = mysql_query("SELECT * FROM stock INNER JOIN barang ON stock.kd_barang = barang.kd_barang WHERE stock.kd_invent='$kodein'");
		$r 		= mysql_fetch_array($query3);

		// Membaca data dari tabel barang

		$disc   	= ($r['disc_barang']/100)*$r['harga_barang'];
		$disc_cost	= $r['harga_barang'] - $disc;
		$cost 		= $r['harga_barang'];

		$d 			=$r['disc_barang'];

		if ($d!= "0"){
	      $divharga	= $disc_cost;
	    }else{
	      $divharga	= $cost;
	    }

		$tgl	= date('Y-m-d');

		// Simpan data ke tabel tmp_pembelian
		$mysql 	= "INSERT INTO tmp_pembelian (kd_invent, harga, jumlah, tanggal, kd_pelanggan) VALUES('$kodein', '$divharga', '1', '$tgl', '$KodePelanggan')"; 

	}

	$query4 = mysql_query($mysql);

	if ($query4) {
		echo "<meta http-equiv='refresh' content='0; url=index.php?pages=cart-product'>";
	}
}
?>