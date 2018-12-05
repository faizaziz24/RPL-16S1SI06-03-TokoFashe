	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(asset/images/heading-pages-06.jpg);">
		<h2 class="l-text2 t-center">Register</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<h4 class="m-text26 p-b-36 p-t-15">Why you will love Fashe</h4>

					<p class="p-b-28">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

					<p class="p-b-28">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

				</div>

				<div class="col-md-6 p-b-30">
					<?php
						$dataNama		= isset($_POST['name']) ? $_POST['name'] :'';
						$dataKelamin	= isset($_POST['cmbKelamin']) ? $_POST['cmbKelamin'] :'';
						$dataPhone 		= isset($_POST['phone-number']) ? $_POST['phone-number'] :'';
						$dataEmail		= isset($_POST['email']) ? $_POST['email'] :'';
						$dataUsername	= isset($_POST['username']) ? $_POST['username'] :'';
					?>

					<form class="leave-comment" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" target="_self">
						<h4 class="m-text26 p-b-36 p-t-15">Register</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Full Name" value="<?php echo $dataNama; ?>">
						</div>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size30 m-b-20">
							<select class="selection-1" name="cmbKelamin">
								<option value="kosong">Select your gender</option>
						          	<?php
										$pilihan = array("Laki-laki", "Perempuan");
										foreach ($pilihan as $nilai) {
											if ($nilai == $dataKelamin) {
												$cek=" selected";
											} else { $cek = ""; }
											echo "<option value='$nilai' $cek>$nilai</option>";
										}
									?>
							</select>
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone-number" placeholder="Phone Number" value="<?php echo $dataPhone; ?>">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="username" placeholder="Username">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password_1" placeholder="Password">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password_2" placeholder="Replace Password">
						</div>

						<?php
						# TOMBOL DAFTAR DIKLIK
						if(isset($_POST['btnRegister'])){
							// Baca Variabel Form
							$txtNama	= $_POST['name'];
							$txtNama 	= str_replace("'","&acute;",$txtNama);
							
							$cmbKelamin	= $_POST['cmbKelamin'];
							$txtEmail	= $_POST['email'];
							$txtNoTelepon	= $_POST['phone-number'];
							
							$txtUsername	= $_POST['username'];
							$txtPassword_1	= $_POST['password_1'];
							$txtPassword_2	= $_POST['password_2'];

							// Validasi, jika data kosong kirimkan pesan error
							$pesanError = array();
							if (trim($txtNama) =="") {
								$pesanError[] = "Fill <b>Your Name</b>";
							}
							if (trim($cmbKelamin) =="kosong") {
								$pesanError[] = "Choose <b>Your Gender</b>";
							}
							if (trim($txtNoTelepon) =="") {
								$pesanError[] = "Fill <b>Your Phone Number</b>";
							}
							if (trim($txtEmail) =="") {
								$pesanError[] = "Fill <b>Your Email Address</b>";
							}							
							if (trim($txtUsername) =="") {
								$pesanError[] = "Fill <b>Your Username</b>";
							}
							if (trim($txtPassword_1) =="") {
								$pesanError[] = "Fill <b>Your Password</b>";
							}
							if (trim($txtPassword_1) != trim($txtPassword_2)) {
								$pesanError[] = "<b>Your Password</b> is not same with the past password";
							}
							
							// Valiasii Username, tidak boleh ada yang kembar
							$qryCek = mysql_query("SELECT * FROM pelanggan WHERE username='$txtUsername'") or die ("Gagal Cek");
							$adaCek = mysql_num_rows($qryCek);
							if($adaCek >= 1) {	
									$pesanError[] = "Errrrrrooorrrr...!!, User <b> $txtUsername </b> sudah ada yang menggunakan.";
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
								//Jika tidak menemukan pesan error, simpan data ke database
								$tanggal	= date('Y-m-d');

								$myQry		= mysql_query("INSERT INTO pelanggan (nm_pelanggan, kelamin, email, no_telepon, username, password, tgl_daftar)VALUES ('$txtNama', '$cmbKelamin', '$txtEmail', '$txtNoTelepon', '$txtUsername', MD5('$txtPassword_1'), '$tanggal')") or die ("Gagal query".mysql_error());

								if($myQry){
									echo "<script>
			                              alert('Selamat Anda Berhasil melakukan Registrasi'); 
			                              window.location = 'index.php?module=home';
			                             </script>";
								}

							}	
						}  
						?>

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