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
		Cart
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
						<th class="column-1">Product</th>
						<th class="column-2">Name - Size</th>
						<th class="column-3">Price</th>
						<th class="column-4 p-l-35">Quantity</th>
						<th class="column-5">Subtotal</th>
					</tr>
					<?php
						$query = mysql_query("SELECT ukuran.*, stock.*, tmp_pembelian.*, barang.* FROM barang JOIN stock ON barang.kd_barang = stock.kd_barang JOIN ukuran ON stock.kd_ukuran = ukuran.kd_ukuran JOIN tmp_pembelian ON stock.kd_invent = tmp_pembelian.kd_invent WHERE tmp_pembelian.kd_pelanggan='$KodePelanggan'");

						$Subtotal = 0; $Total = 0;

						$no	= 0;

						while ($row = mysql_fetch_array($query)) {
							$no++;

							$Subtotal	= $row['harga'] * $row['jumlah'];
	  						$Total		= $Total + $Subtotal;


	  						if ($row['file_gambar']=="") {
								$fileGambar = "item-01.jpg";
							}else {
								$fileGambar	= $row['file_gambar'];
						  	}

						 	//Kode Barang
	  						$KodeBarang = $row['kd_barang'];
					?>


					<tr class="table-row">
						<td class="column-1">
							<div class="cart-img-product">
								<img src="admin/upload/barang/<?php echo $fileGambar; ?>" alt="IMG-PRODUCT">
							</div>
						</td>
						<td class="column-2"><?php echo $row['nm_barang']; ?> - (<?php echo $row['nm_ukuran']; ?>)</td>
						<td class="column-3">Rp. <?php echo $row['harga']; ?>,-</td>
						<td class="column-4">
							<div class="flex-w bo5 of-hidden w-size17">
								<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="<?php echo $row['jumlah'] ;?>">
							</div>
						</td>
						<td class="column-5">Rp. <?php echo $Subtotal; ?>,-</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
		<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
			<div class="flex-w flex-m w-full-sm">
				<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" >
						Back Shop
					</button>
				</div>
			</div>

			<div class="size10 trans-0-4 m-t-10 m-b-10">
				<!-- Button -->
				<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
					Update Cart
				</button>
			</div>
		</div>

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

				<div class="w-size20 w-full-sm">
					<div class="size13 bo4 m-b-22">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="receiver" placeholder="Nama Receiver">
					</div>

					<div class="size13 bo4 m-b-22">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="phone" placeholder="Number Phone">
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
							<option value="kosong">Pilih Provinsi Terlebih Dahulu</option>
						</select>
					</div>

					<div class="rs2-select2 rs3-select2 rs4-select2 of-hidden w-size21 m-t-8 m-b-4">
						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="address" placeholder="Address"></textarea>
					</div>


					<div class="size13 bo4 m-b-22">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="Postcode / Zip">
					</div>
					<div class="size14 trans-0-4 m-b-10">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Checkout
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>