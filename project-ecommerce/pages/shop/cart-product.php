<?php
include "library/config.php";
include "library/koneksi.php";

include"inc.session.php";

// Baca Kode Pelanggan yang Login
$KodePelanggan	= $_SESSION['SES_PELANGGAN'];

if(isset($_GET['aksi']) and trim($_GET['aksi'])=="delete"){ 
	// Membaca Id data yang dihapus
	$idDel	= $_GET['id_delete'];
	
	// Menghapus data keranjang sesuai Kode yang dibaca di URL
	$queryd = mysql_query("DELETE FROM tmp_pembelian  WHERE kd_invent='$idDel' AND kd_pelanggan='$KodePelanggan'") or die ("Eror hapus data".mysql_error());
	if($queryd){
		echo "<meta http-equiv='refresh' content='0; url=index.php?pages=cart-product'>";
	}
}
# TOMBOL UPDATE DIKLIK
if(isset($_POST['btnUpdate'])){
	$arrData = count($_POST['jumbr']); 
	$qty = 1;

	for ($i=0; $i < $arrData; $i++) {
		# Melewati biar tidak 0 atau minus
		if ($_POST['jumbr'][$i] < 1) {
			$qty = 1;
		}
		else {
			$qty = $_POST['jumbr'][$i];
		}
					
		# Simpan Perubahan
		$kodeInv	= $_POST['kdbr'][$i];
		$tanggal	= date('Y-m-d');

		$query = mysql_query("UPDATE tmp_pembelian SET jumlah='$qty', tanggal='$tanggal' 
				WHERE kd_invent='$kodeInv' AND kd_pelanggan='$KodePelanggan'");
	}
	echo "<meta http-equiv='refresh' content='0; url=index.php?pages=cart-product'>";
}

if(isset($_POST['btnBack'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?pages=shop'>";
}
?>
<!-- Tittle Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(asset/images/heading-pages-02.jpeg);">
	<h2 class="l-text2 t-center">
		Cart Buying
	</h2>
</section>

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
	<div class="container">
		<!-- Cart item -->
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="formcart" target="_self">
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1">Product</th>
							<th class="column-2">Name - Size</th>
							<th class="column-3">Price</th>
							<th class="column-4 p-l-35">Quantity</th>
							<th class="column-5">Subtotal</th>
						</tr>
						<?php
							$query = mysql_query("SELECT ukuran.*, stock.*, tmp_pembelian.*, barang.* FROM barang JOIN stock ON barang.kd_barang = stock.kd_barang JOIN ukuran ON stock.kd_ukuran = ukuran.kd_ukuran JOIN tmp_pembelian ON stock.kd_invent = tmp_pembelian.kd_invent WHERE tmp_pembelian.kd_pelanggan='$KodePelanggan'");

							$Subtotal = 0; $Total = 0;

							while ($row = mysql_fetch_array($query)) {

								$Subtotal	= $row['harga'] * $row['jumlah'];
		  						$Total		= $Total + $Subtotal;


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
							<td class="column-2"><?php echo $row['nm_barang']; ?> - (<?php echo $row['nm_ukuran']; ?>)</td>
							<td class="column-3">Rp. <?php echo $row['harga']; ?>,-</td>
							<td class="column-4" style="padding-left: 30px;">
								<div class="flex-w bo5 of-hidden w-size11">
									<input class="size8 m-text18 t-center num-product" type="number" name="jumbr[]" value="<?php echo $row['jumlah'] ;?>">
									<input class="size8 m-text18 t-center num-product" type="hidden" name="kdbr[]" value="<?php echo $row['kd_invent'] ;?>">
								</div>
							</td>
							<td class="column-5">Rp. <?php echo $Subtotal; ?>,-</td>
							<td class="column-5"><a href="index.php?pages=cart-product&aksi=delete&id_delete=<?php echo $row['kd_invent'] ;?>">X</a></td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" name="btnBack">
							Back Shop
						</button>
					</div>
				</div>

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" name="btnUpdate">
						Update Cart
					</button>
				</div>
			</div>
		</form>
		<!-- Total -->
		<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
			<h5 class="m-text20 p-b-24">
				Cart Totals
			</h5>

			<!--  -->
			<div class="flex-w flex-sb-m p-b-12">
				<span class="s-text18 w-size19 w-full-sm">
					Total:
				</span>

				<span class="m-text21 w-size20 w-full-sm">
					Rp.<?php echo $Total; ?>,-
				</span>
			</div>

			<!--  -->
			<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
				<span class="s-text18 w-size19 w-full-sm">
					Shipping:
				</span>
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="formcheckout" target="_self">
				<div class="w-full-sm">
					<div class="size13 bo4 m-b-22">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="Receiver" placeholder="Nama Receiver">
					</div>

					<div class="size13 bo4 m-b-22">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="Phone" placeholder="Number Phone">
					</div>

					<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
						<select class="selection-1" name="cmbProvinsi" id="cmbProvinsi">
							<?php
							  	$query= mysql_query("SELECT * FROM provinsi ORDER BY nm_provinsi ASC");

							  	$jml = mysql_num_rows($query);

							  	if ($jml > 0) {
							  		echo '<option value="">Pilih Provinsi Anda</option>';
							  		while ($row = mysql_fetch_array($query)) {
							  		   echo '<option value="'.$row['kd_provinsi'].'">'.$row['nm_provinsi'].'</option>';
							  		}
							  	}else{
		                      		echo '<option value="">Provinsi Tidak Tersedia</option>';
		                      	}
							?>
						</select>
					</div>

					<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
						<select class="selection-1" name="cmbKota" id="cmbKota">
							<option value="">Pilih Provinsi Terlebih Dahulu</option>
						</select>
					</div>

					<div class="rs2-select2 rs3-select2 rs4-select2 of-hidden w-size21 m-t-8 m-b-4">
						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="Address" placeholder="Address"></textarea>
					</div>


					<div class="size13 bo4 m-b-22">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="Postcode" placeholder="Postcode / Zip">
					</div>
					<div class="s-text8 sizefull">
					<?php
						# BACA TOMBOL CHECKOUT DIKLIK
						if(isset($_POST['btnCheckout'])){
							$Receiver 	= $_POST['Receiver'];
							$Phone	  	= $_POST['Phone'];
							$cmbProvinsi= $_POST['cmbProvinsi'];
							$cmbKota 	= $_POST['cmbKota'];
							$Address 	= $_POST['Address'];
							$Postcode 	= $_POST['Postcode'];

							$pesanError = array();

							if (trim($Receiver) =="") {
								$pesanError[] = "Isikan <b>nama Penerima</b>";
							}

							if (trim($Phone) =="") {
								$pesanError[] = "Isikan <b>Nomor Telp. Penerima</b>";
							}

							if (trim($cmbProvinsi) =="") {
								$pesanError[] = "Pilih <b>Provinsi yang Anda</b>";
							}

							if (trim($cmbKota) =="") {
								$pesanError[] = "Pilih <b>Ukuran yang Anda</b>";
							}

							if (trim($Address) =="") {
								$pesanError[] = "Isikan <b>alamat Tujuan Anda</b>";
							}

							if (trim($Postcode) =="") {
								$pesanError[] = "Isikan <b>Kodepos Alamat Anda</b>";
							}

							# JIKA ADA PESAN ERROR DARI VALIDASI
							if (count($pesanError)>=1 ){
								echo "<span class='s-text8 w-size19 w-full-sm'>";
									$noPesan=0;
									foreach ($pesanError as $indeks=>$pesan_tampil) { 
									$noPesan++;
										echo "&nbsp;&nbsp; $noPesan. $pesan_tampil<br>";	
									} 
								echo "<br></span>"; 
							}else{
								# SIMPAN DATA KE DATABASE. Jika tidak menemukan pesan error, simpan data ke database
								$tanggal		= date('Y-m-d');

								# SIMPAN DATA IDENTITAS PENGIRIMAN KE DATABASE

								$queryi	= mysql_query("INSERT INTO pembelian (kd_pelanggan, tgl_pembelian, nama_penerima, alamat_lengkap, kd_provinsi, kd_kota, kode_pos, no_telepon) VALUES ('$KodePelanggan', '$tanggal', '$Receiver', '$Address', '$cmbProvinsi', '$cmbKota', '$Postcode', '$Phone')");
								
								if ($queryi) {
									$querycs= mysql_query("SELECT * FROM pembelian WHERE kd_pelanggan ='$KodePelanggan' ORDER BY kd_pembelian DESC LIMIT 1;");

									$rowcs  = mysql_fetch_array($querycs);

									$kodebeli = $rowcs['kd_pembelian'];

									$queryc	= mysql_query("SELECT * FROM tmp_pembelian WHERE kd_pelanggan='$KodePelanggan'");

									while ($row = mysql_fetch_array($queryc)) {
										$kodeInv	= $row['kd_invent'];
										$hargaInv	= $row['harga'];
										$jumInv		= $row['jumlah'];	

										$querys = mysql_query("INSERT INTO pembelian_item (kd_pembelian, kd_invent, harga, jumlah) VALUES ('$kodebeli','$kodeInv','$hargaInv','$jumInv')");
									}

									$queryd = mysql_query("DELETE FROM tmp_pembelian WHERE kd_pelanggan='$KodePelanggan'");

									echo "<script>
			                              alert('Selamat Transaksi Anda Berhasil!!'); 
			                              window.location = 'index.php?module=home';
			                          </script>";
								}
							}
						}
					?>
					</div>
					<div class="size14 trans-0-4 m-b-10">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" name="btnCheckout">
							Checkout
						</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</section>