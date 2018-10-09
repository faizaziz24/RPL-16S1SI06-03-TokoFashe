<?php
  	$kd_proc  = $_GET['kd_barang'];
  	$sql_proc = mysql_query("SELECT * FROM barang WHERE kd_barang='$kd_proc'");

  	$r 			=mysql_fetch_array($sql_proc);

  	$kodeBarang = $r['kd_barang'];

  	$disc   	= ($r['disc_barang']/100)*$r['harga_barang'];
	$disc_cost	= $r['harga_barang'] - $disc;

	$d 			=$r['disc_barang'];

	$hargatetap	= "<span class='block2-price m-text6 p-r-5'>Rp.$r[harga_barang],-</span>";
	$hargadiskon= "<span class='block2-oldprice m-text7 p-r-5'>Rp.$r[harga_barang],-</span> 
				   <span class='block2-newprice m-text8 p-r-5'>Rp.$disc_cost,-</span>";

	if ($d!= "0"){
      $divharga=$hargadiskon;
    }else{
      $divharga=$hargatetap;
    } 
?>

<!-- Product Detail -->
<div class="container bgwhite p-t-35 p-b-80">
	<div class="flex-w flex-sb">
		<div class="w-size13 p-t-30 respon5">
			<div class="block2-img wrap-pic-w of-hidden">
				<img  src="admin/upload/barang/<?php echo $r['file_gambar'] ;?>" alt="IMG-PRODUCT">
			</div>
		</div>
		<div class="w-size14 p-t-30 respon5">
			<?	
				$dataBahan	= isset($_POST['cmbBahan']) ? $_POST['cmbBahan'] :'';
				$dataSize	= isset($_POST['cmbSize']) ? $_POST['cmbSize'] :'';
			?>

			<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" target="_self">
				<h4 class="product-detail-name m-text16 p-b-13">
					<?php echo $r['nm_barang'];?>
				</h4>

				<?php echo $divharga;?>

				<p class="s-text8 p-t-10 p-b-45">
					<span class="s-text8">
						<?php 
							$query_kat  = mysql_query("SELECT nm_kategori, nm_jenis FROM kategori JOIN jenis ON kategori.kd_jenis = jenis.kd_jenis WHERE kd_kategori = '$r[kd_kategori]'");
							$kat 		= mysql_fetch_array($query_kat);
						?>
						Jenis   : <?php echo $kat['nm_jenis']; ?><br>
						Kategori: <?php echo $kat['nm_kategori']; ?>
					</span>

					<?php echo $r['keterangan'];?>
				</p>

				<div class="p-t-33 p-b-60">
					<?php
					  	$query_lth = mysql_query("SELECT DISTINCT bahan.kd_bahan, bahan.nm_bahan FROM bahan INNER JOIN stock ON bahan.kd_bahan = stock.kd_bahan WHERE stock.kd_barang = '$kd_proc'");

					  	$jml = mysql_num_rows($query_lth);
					?>
					<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">Bahan</div>
						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-1" name="cmbBahan" id="cmbBahan">
								<?php
								  	if ($jml > 0) {
								  		echo '<option value="kosong">Pilih Bahan yang Anda Inginkan</option>';
								  		while ($lth = mysql_fetch_array($query_lth)) {
								  		   echo '<option value="'.$lth['kd_bahan'].'">'.$lth['nm_bahan'].'</option>';
								  		}
								  	}else{
		                          		echo '<option value="kosong">Bahan Tidak Tersedia</option>';
		                          	}
								?>
							</select>
						</div>
					</div>

					<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">Size</div>
						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-1" name="cmbSize" id="cmbSize">
								<option value="kosong">Pilih Bahan Terlebih Dahulu</option>
							</select>
						</div>
					</div>
					
					<?php 
					# BACA TOMBOL LOGIN DIKLIK
					if(isset($_POST['btnCart'])){

						$cmbBahan	= $_POST['cmbBahan'];
						$cmbSize	= $_POST['cmbSize'];

						// Validasi, jika data kosong kirimkan pesan error
						$pesanError = array();

						if (trim($cmbBahan) =="kosong") {
							$pesanError[] = "Pilih <b>Bahan yang Anda Inginkan Terlebih Dahulu</b>";
						}

						if (trim($cmbSize) =="kosong") {
							$pesanError[] = "Pilih <b>Ukuran yang Anda Inginkan Terlebih Dahulu</b>";
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

					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" type="submit" name="btnCart">
									Add to Cart
								</button>
							</div>
						</div>
					</div>
				</div>	
			</form>
		</div>
	</div>
</div>