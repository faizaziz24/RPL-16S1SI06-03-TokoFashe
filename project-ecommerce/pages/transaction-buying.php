<?php
include "library/config.php";
include "library/koneksi.php";

include"inc.session.php";

// Baca Kode Pelanggan yang Login
$KodePelanggan	= $_SESSION['SES_PELANGGAN'];

?>

<!-- Tittle Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(asset/images/heading-pages-02.jpeg);">
	<h2 class="l-text2 t-center">
		Transaction Buying
	</h2>
</section>

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
	<div class="container">
		<!-- Cart item -->
		<div class="container-table-cart pos-relative">
			<div class="wrap-table-shopping-cart bgwhite">
				<table class="table-shopping-cart">
					<tr class="table-head">
						<th class="column-1">No.</th>
						<th class="column-2">Penerima</th>
						<th class="column-2">Tanggal Pembelian</th>
						<th class="column-2">Total Pembayaran</th>
						<th class="column-4 p-l-30">Status</th>
						<th class="column-3 p-l-25">Cetak</th>
					</tr>
					<?php
						$query = mysql_query("SELECT pelanggan.*, pembelian.*, kota.*, pembelian_item.* FROM pelanggan JOIN pembelian ON pelanggan.kd_pelanggan = pembelian.kd_pelanggan JOIN kota ON pembelian.kd_kota = kota.kd_kota JOIN pembelian_item ON pembelian.kd_pembelian = pembelian_item.kd_pembelian WHERE pelanggan.kd_pelanggan='$KodePelanggan' ORDER BY pembelian_item.kd_pembelian");

						$no = 0;

						while ($row = mysql_fetch_array($query)) {
							$no++;

							$KodeBeli	= $row['kd_pembelian'];
							$Ongkir		= $row['biaya_kirim'];

							$HitungBeli	= mysql_query("SELECT SUM(harga*jumlah) AS total_harga, SUM(jumlah) AS jumlah_barang FROM pembelian_item WHERE kd_pembelian='$KodeBeli'");

							$HitungData	= mysql_fetch_array($HitungBeli);

							$totalHarga = $HitungData['total_harga'];
							$jumBarang 	= $HitungData['jumlah_barang'];

							$biayaKirim = $jumBarang * $Ongkir;

							$totalBayar	= $totalHarga + $biayaKirim;

					?>
					<tr class="table-row">
						<td class="column-1">
							<?php echo $no; ?>
						</td>
						<td class="column-2">
							<a href="index.php?pages=detail-buying&kd_pembelian=<?php echo $row['kd_pembelian']; ?>" class="block2-name dis-block s-text3 p-b-5">
								<?php echo $row['nama_penerima']; ?>
							</a>
						</td>
						<td class="column-2">
							<?php echo $row['tgl_pembelian']; ?>
						</td>
						<td class="column-2">
							Rp. <?php echo $totalBayar; ?>,- 

						</td>
						<td class="column-4" style="padding-left: 30px;">
							<?php echo $row['status_bayar']; ?>
						</td>
						<td class="column-3">
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" name="btnCetak">
								Cetak
							</button>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</section>