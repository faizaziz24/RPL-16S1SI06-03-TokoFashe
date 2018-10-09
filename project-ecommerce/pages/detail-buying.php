<?php
include"inc.session.php";

$kd_pembelian 	= $_GET['kd_pembelian'];

$KodePelanggan	= $_SESSION['SES_PELANGGAN'];


if(isset($_POST['btnBack'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?pages=trans-buying'>";
}
?>
<!-- Tittle Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(asset/images/heading-pages-02.jpeg);">
	<h2 class="l-text2 t-center">
		Detail Buying
	</h2>
</section>

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
	<?php
		$queryb = mysql_query("SELECT pelanggan.*, pembelian.*, kota.*, provinsi.* FROM pelanggan JOIN pembelian ON pelanggan.kd_pelanggan = pembelian.kd_pelanggan JOIN kota ON pembelian.kd_kota = kota.kd_kota JOIN provinsi ON kota.kd_provinsi = provinsi.kd_provinsi WHERE pembelian.kd_pembelian='$kd_pembelian' AND pelanggan.kd_pelanggan='$KodePelanggan'");

		$rowb	= mysql_fetch_array($queryb);
	?>
	<div class="container m-b-80">
		<div class="container-table-cart pos-relative">
			<div class="wrap-table-shopping-cart bgwhite">
				<table class="table-shopping-cart">
					<tr class="table-head">
						<th class="column-1">Penerima</th>
						<th class="column-3">Nomor Telp.</th>
						<th class="column-3">Tanggal</th>
						<th class="column-2">Kota - Provinsi</th>
						<th class="column-2">Alamat - kodepos</th>
						<th class="column-5">Status</th>
					</tr>
					<tr class="table-row">
						<td class="column-1">
							<?php echo $rowb['nama_penerima']; ?>
						</td>
						<td class="column-3">
							<?php echo $rowb['no_telepon']; ?>
						</td>
						<td class="column-3">
							<?php echo $rowb['tgl_pembelian']; ?>
						</td>
						<td class="column-2">
							<?php echo $rowb['nm_kota']; ?> - <?php echo $rowb['nm_provinsi']; ?>
						</td>
						<td class="column-2">
							<?php echo $rowb['alamat_lengkap']; ?> kodepos <?php echo $rowb['kode_pos']; ?>
						</td>
						<td class="column-5">
							<?php echo $rowb['status_bayar']; ?>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="container">
		<!-- Cart item -->
		<div class="container-table-cart pos-relative">
			<div class="wrap-table-shopping-cart bgwhite">
				<table class="table-shopping-cart">
					<tr class="table-head">
						<th class="column-1">Product</th>
						<th class="column-2">Name - Size</th>
						<th class="column-2">Price</th>
						<th class="column-4 p-l-35">Quantity</th>
						<th class="column-2">Subtotal</th>
					</tr>
					<?php
						$query = mysql_query("SELECT ukuran.*, stock.*, kota.*, pembelian_item.*, pembelian.*, barang.* FROM barang JOIN stock ON barang.kd_barang = stock.kd_barang JOIN ukuran ON stock.kd_ukuran = ukuran.kd_ukuran JOIN pembelian_item ON stock.kd_invent = pembelian_item.kd_invent JOIN pembelian ON pembelian_item.kd_pembelian = pembelian.kd_pembelian JOIN kota ON pembelian.kd_kota = kota.kd_kota WHERE pembelian.kd_pembelian='$kd_pembelian' AND pembelian.kd_pelanggan='$KodePelanggan'");

						$Subtotal = 0; $Total = 0;

						while ($row = mysql_fetch_array($query)) {

							$Ongkir		= $row['biaya_kirim'];
							$Harga		= $row['harga'];
							$Jumlah 	= $row['jumlah'];
							$Subtotal	= $Harga * $Jumlah;

							$HitungBeli	= mysql_query("SELECT SUM(harga*jumlah) AS total_harga, SUM(jumlah) AS jumlah_barang FROM pembelian_item WHERE kd_pembelian='$kd_pembelian'");

							$HitungData	= mysql_fetch_array($HitungBeli);

							$totalHarga = $HitungData['total_harga'];
							$jumBarang 	= $HitungData['jumlah_barang'];

							$biayaKirim = $jumBarang * $Ongkir;

							$totalBayar	= $totalHarga + $biayaKirim;

	  						if ($row['file_gambar']=="") {
								$fileGambar = "item-01.jpg";
							}else {
								$fileGambar	= $row['file_gambar'];
						  	}
					?>
					<tr class="table-row">
						<td class="column-1">
							<div class="cart-img-product">
								<img src="admin/upload/barang/<?php echo $fileGambar; ?>" alt="IMG-PRODUCT">
							</div>
						</td>
						<td class="column-2">
							<?php echo $row['nm_barang']; ?> - (<?php echo $row['nm_ukuran']; ?>)
						</td>
						<td class="column-2">
							Rp. <?php echo $Harga; ?>,-
						</td>
						<td class="column-4" style="padding-left: 30px;">
							<?php echo $Jumlah ;?>
						</td>
						<td class="column-2">Rp. <?php echo $Subtotal; ?>,-</td>
					</tr>
					<?php } ?>
					<tr class="table-row">
						<td class="column-1">
							-
						</td>
						<td class="column-2">
							-
						</td>
						<td class="column-2">
							-
						</td>
						<td class="column-4" style="padding-left: 30px;">
							<?php echo $jumBarang ;?>
						</td>
						<td class="column-2">
							Rp. <?php echo $totalHarga; ?>,-
						</td>
					</tr>
					<tr class="table-row">
						<td class="column-1">
							-
						</td>
						<td class="column-2">
							-
						</td>
						<td class="column-2">
							-
						</td>
						<td class="column-4" style="padding-left: 30px;">
							Ongkir :<br>
							Biaya  :
						</td>
						<td class="column-2">
							Rp. <?php echo $biayaKirim; ?>,-<br>
							Rp. <?php echo $totalBayar; ?>,-
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="flex-w flex-sb-m p-t-20 p-b-20 bo8 p-l-35 p-r-20 p-lr-15-sm">
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form_trans" target="_self">
				<div class="flex-w flex-m w-full-sm">
					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" name="btnBack">
							Kembali
						</button>
					</div>
					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" name="btnCtk">
							Cetak
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>