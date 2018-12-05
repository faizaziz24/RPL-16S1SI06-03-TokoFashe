
	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(asset/images/heading-pages-02.jpeg);">
		<h2 class="l-text2 t-center">
			Contact
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<h4 class="m-text26 p-b-36 p-t-15">Contact Us</h4>

					<p class="p-b-28">Store at 1th floor Fashe, Klitren, Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta (DIY) or call us on (+62821) 3654 9690
					</p>
					<div class="col-md-6 p-b-30">
						<div class="hov-img-zoom">
							<img src="asset/images/banner-02.jpeg" alt="IMG-ABOUT">
						</div>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<?php
						$dataNama		= isset($_POST['name']) ? $_POST['name'] :'';
						$dataPhone 		= isset($_POST['phone-number']) ? $_POST['phone-number'] :'';
						$dataEmail		= isset($_POST['email']) ? $_POST['email'] :'';
						$dataPesan		= isset($_POST['message']) ? $_POST['message'] :'';
					?>
					<form class="leave-comment" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" target="_self">
						<h4 class="m-text26 p-b-36 p-t-15">
							Send us your message
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Full Name" value="<?php echo $dataNama; ?>">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone-number" placeholder="Phone Number" value="<?php echo $dataPhone; ?>">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address" value="<?php echo $dataEmail; ?>">
						</div>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Message" value="<?php echo $dataPesan; ?>"></textarea>

						<?php
						# TOMBOL SEND DIKLIK
						if(isset($_POST['btnContact'])){
							// Baca Variabel Form
							$txtNama	= $_POST['name'];
							$txtNama 	= str_replace("'","&acute;",$txtNama);
							
							$txtPhone	= $_POST['phone-number'];
							$txtEmail	= $_POST['email'];
							$txtPesan	= $_POST['message'];
							

							// Validasi, jika data kosong kirimkan pesan error
							$pesanError = array();
							if (trim($txtNama) =="") {
								$pesanError[] = "Fill <b>Your Name</b>";
							}
							if (trim($txtPhone) =="") {
								$pesanError[] = "Fill <b>Your Phone Number</b>";
							}
							if (trim($txtEmail) =="") {
								$pesanError[] = "Fill <b>Your Email Address</b>";
							}							
							if (trim($txtPesan) =="") {
								$pesanError[] = "Fill <b>Your Message</b>";
							}
							
							# JIKA ADA PESAN ERROR DARI VALIDASI
							if (count($pesanError)>=1 ){
								echo "<div class='pesanError' align='left'>";
									$noPesan=0;
									foreach ($pesanError as $indeks=>$pesan_tampil) { 
									$noPesan++;
										echo "&nbsp;&nbsp; $noPesan. $pesan_tampil<br>";	
									} 
								echo "<br>"; 
							}
							else {
								# SIMPAN DATA KE DATABASE. Jika tidak menemukan pesan error, simpan data ke database
								$tanggal	= date('Y-m-d');

								$myQry		= mysql_query("INSERT INTO pesan (nm_pesan, no_telepon, email, isi_pesan, tgl_pesan)VALUES ('$txtNama', '$txtPhone', '$txtEmail', '$txtPesan', '$tanggal')") or die ("Gagal query".mysql_error());

								if($myQry){
									echo "<script>
			                              alert('Selamat Anda Berhasil melakukan Pengiriman Pesan'); 
			                              window.location = 'index.php?module=contact';
			                             </script>";
								}

							}	
						}  
						?>
						<div class="w-size25">
							<!-- Button -->
							<button name="btnContact" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Send
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
