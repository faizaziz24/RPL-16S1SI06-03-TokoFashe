	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(asset/images/heading-pages-02.jpeg);">
		<h2 class="l-text2 t-center">Custom</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<h4 class="m-text26 p-b-36 p-t-15">Why you will love Custom</h4>
					<div class="hov-img-zoom">
						<img src="asset/images/banner-03.jpeg" alt="IMG-ABOUT">
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<form class="leave-comment" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" target="_self">
						<h4 class="m-text26 p-b-36 p-t-15">Custom</h4>
						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size30 m-b-20">
							<select class="selection-1" name="cmbJenis">
								<option value="kosong">Pilih Jenis Barang</option>
							</select>
						</div>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size30 m-b-20">
							<select class="selection-1" name="cmbKategori">
								<option value="kosong">Pilih Kategori Barang</option>
							</select>
						</div>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size30 m-b-20">
							<select class="selection-1" name="cmbBahan">
								<option value="kosong">Pilih Bahan Barang</option>
							</select>
						</div>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size30 m-b-20">
							<select class="selection-1" name="cmbUkuran">
								<option value="kosong">Pilih Ukuran Barang</option>
							</select>
						</div>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size30 m-b-20">
							<select class="selection-1" name="cmbBahan">
								<option value="kosong">Pilih Waktu Penyelesaian</option>
							</select>
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="jumlah" placeholder="Jumlah Barang">
						</div>

						<div class="w-size25">
							<!-- Button -->
							<button name="btnRegister" type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Register
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>