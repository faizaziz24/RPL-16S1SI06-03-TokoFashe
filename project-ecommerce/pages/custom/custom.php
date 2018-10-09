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
					<?php

					?>
					<form class="leave-comment" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" target="_self">
						<h4 class="m-text26 p-b-36 p-t-15">Custom</h4>
						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size30 m-b-20">
							<select class="selection-1" name="cmbJenis" id="cmbJenis">
								<?php
									$queryj	= mysql_query("SELECT * FROM jenis");

									$j 		= mysql_num_rows($queryj);

									if ($j > 0) {
								  		echo '<option value="kosong">Pilih Jenis Barang</option>';
								  		while ($row = mysql_fetch_array($queryj)) {
								  		   echo '<option value="'.$row['kd_jenis'].'">'.$row['nm_jenis'].'</option>';
								  		}
								  	}else{
		                          		echo '<option value="kosong">Jenis Barang Tidak Tersedia</option>';
		                          	}
								?>
							</select>
						</div>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size30 m-b-20">
							<select class="selection-1" name="cmbKategori" id="cmbKategori">
								<option value="kosong">Pilih Kategori Barang</option>
							</select>
						</div>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size30 m-b-20">
							<select class="selection-1" name="cmbBahan" id="cmbBahan">
								<option value="kosong">Pilih Bahan Barang</option>
							</select>
						</div>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size30 m-b-20">
							<select class="selection-1" name="cmbUkuran" id="cmbUkuran">
								<option value="kosong">Pilih Ukuran Barang</option>
							</select>
						</div>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size30 m-b-20">
							<select class="selection-1" name="cmbWaktu" id="cmbWaktu">
								<option value="kosong">Pilih Lama Waktu Penyelesaian</option>
							</select>
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="jumlah" placeholder="Jumlah Barang">
						</div>

						<div class="size15 m-b-20">
							<input class="s-text7 p-l-22 p-r-22" type="file" name="nm_gambar">
							<br><p class="m-l-20 help-block">file maksimal 1 mb. format nama file :Nama Anda_Nama File_Tanggal.</p>
						</div>
						<?php 
							# BACA TOMBOL LOGIN DIKLIK
							if(isset($_POST['btnCustom'])){

								$cmbJenis	= $_POST['cmbJenis'];
								$cmbKategori= $_POST['cmbKategori'];
								$cmbBahan	= $_POST['cmbBahan'];
								$cmbUkuran	= $_POST['cmbUkuran'];
								$cmbWaktu	= $_POST['cmbWaktu'];
								$jumlah		= $_POST['jumlah'];

								// Validasi, jika data kosong kirimkan pesan error
								$pesanError = array();

								if (trim($cmbJenis) =="kosong") {
									$pesanError[] = "Pilih <b>Jenis yang Anda Inginkan Terlebih Dahulu</b>";
								}

								if (trim($cmbKategori) =="kosong") {
									$pesanError[] = "Pilih <b>Kategori yang Anda Inginkan Terlebih Dahulu</b>";
								}

								if (trim($cmbBahan) =="kosong") {
									$pesanError[] = "Pilih <b>Bahan yang Anda Inginkan Terlebih Dahulu</b>";
								}

								if (trim($cmbUkuran) =="kosong") {
									$pesanError[] = "Pilih <b>Ukuran yang Anda Inginkan Terlebih Dahulu</b>";
								}

								if (trim($cmbWaktu) =="kosong") {
									$pesanError[] = "Pilih <b>Waktu yang Anda Inginkan Terlebih Dahulu</b>";
								}

								if (trim($jumlah) =="kosong") {
									$pesanError[] = "Pilih <b>Jumlah yang Anda Inginkan Terlebih Dahulu</b>";
								}

								# JIKA ADA PESAN ERROR DARI VALIDASI
								if (count($pesanError)>=1 ){
									echo "<span class='s-text8'>";
										$noPesan=0;
										foreach ($pesanError as $indeks=>$pesan_tampil) { 
										$noPesan++;
											echo "&nbsp;&nbsp; $noPesan. $pesan_tampil<br>";	
										} 
									echo "</span>"; 
								}else{
									echo "<script>
							                alert('Penambahan Barang Berhasil! '); 
							                window.location = 'index.php?pages=buy-product&kodebr=$kodeBarang&kodebhn=".$_POST[cmbBahan]."&kodesz=".$_POST[cmbSize]."';
							              </script>";
								}
							}

							?>
						<div class="w-size25">
							<!-- Button -->
							<button name="btnCustom" type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Add to Cart
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>