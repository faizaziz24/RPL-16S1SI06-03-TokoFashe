<?php

if (! isset($_SESSION['SES_PELANGGAN'])) {
// Jika belum Login, maka form Login ditampilkan
?>
<div class="header-wrapicon2">
	<img src="asset/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

	<div class="header-cart header-dropdown">
		<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" target="_self">
			<h5 class="text-center m-text20 p-b-24">LOGIN</h5>
			<div class="bo4 of-hidden size15 m-b-20">
				<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="username" placeholder="Username">
			</div>

			<div class="bo4 of-hidden size15 m-b-20">
				<input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password" placeholder="Password">
			</div>

			<?php 
			# BACA TOMBOL LOGIN DIKLIK
			if(isset($_POST['btnLogin'])){
				// Baca variabel form	
				$txtUsername   = $_POST['username'];
				$txtPassword   = $_POST['password'];
				
				// Validasi data pada form
				$pesanError = array();
				if (trim($txtUsername)=="") {
					$pesanError[] = "Data <b>Username</b> kosong, silahkan isi dengan benar";
				}
				if (trim($txtPassword)=="") {
					$pesanError[] = "Data <b>Password</b> kosong, silahkan isi dengan benar";
				}

				// Skrip validasi User dan Password dengan data di Database
				$loginQry = mysql_query("SELECT * FROM pelanggan WHERE username='$txtUsername' AND password=MD5('$txtPassword')");
				$loginQty = mysql_num_rows($loginQry);

				if($loginQty < 1) {
					$pesanError[] = "Data <b>Username dan Password</b> yang Anda masukan belum benar";
				}	
				
				// Tampilkan pesan Error jika ditemukan
				if (count($pesanError)>=1 ) {
					echo "<div align='left'>";
					echo "&nbsp; <b> LOGIN ANDA SALAH .............</b><br>";
					echo "&nbsp; <b> Kesalahan Input : </b><br>";
					$urut_pesan = 0;
					foreach ($pesanError as $indeks=>$pesanTampil) {
						$urut_pesan++;
						echo "<div class='pesanError' align='left'>";
						echo "&nbsp; &nbsp;";
						echo "$urut_pesan . $pesanTampil <br>";
					}
					echo "<br>";
				}else {	
					# JIKA TIDAK ADA ERROR FORM DAN LOGIN BERHASIL
					if ($loginQty >=1) {
						// baca data dari Query Login
						$loginData = mysql_fetch_array($loginQry);

						// Membuat session
						$_SESSION['SES_PELANGGAN'] 	= $loginData['kd_pelanggan'];
						$_SESSION['SES_USERNAME'] 	= $loginData['username'];
						
						// Baca data Kode Pelanggan yang login
						$KodePelanggan	= $loginData['kd_pelanggan'];
						
						// Kosongkan tabel TMP yang datanya milik Pelanggan
						$hapusSql1 = "DELETE FROM tmp_pembelian WHERE kd_pelanggan='$KodePelanggan'";
						mysql_query($hapusSql1) or die ("Gagal query hapus".mysql_error());

						$hapusSql2 = "DELETE FROM tmp_pemesanan WHERE kd_pelanggan='$KodePelanggan'";
						mysql_query($hapusSql2) or die ("Gagal query hapus".mysql_error());
				
						echo "<script>
		                        alert('Selamat Anda Berhasil melakukan Login!! Selamat Datang di Fashe'); 
		                        window.location = 'index.php?pages=home';
		                      </script>";
		                exit;
					}
				}
			}
			?>
			<div class="header-cart-buttons">
				<div class="header-cart-wrapbtn">
					<!-- Button -->
					<a href="index.php?pages=register" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">Register</a>
				</div>
				<div class="header-cart-wrapbtn">
					<!-- Button -->
					<button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" name="btnLogin">Login</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php 
}else { 
// Jika sudah Login, maka menu Pelanggan ditampilkan
include"inc.session.php";

// Baca Kode Pelanggan yang Login
$KodePelanggan	= $_SESSION['SES_PELANGGAN'];
?>

<div class="header-wrapicon2">
	<img src="asset/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

	<div class="header-cart header-dropdown">
		<h5 class="text-center m-text20 p-b-24">Profile</h5>
		<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
			<li class="header-cart-item">
				<div>
					<a href="index.php?pages=trans-buying" class="header-cart-item-name">Tampil Transaksi Pembelian</a>
				</div>
				<div>
					<a href="#" class="header-cart-item-name">Tampil Transaksi Pemesanan</a>
				</div>
				<div class="header-cart-item-txt">
					<a href="login-out.php" class="header-cart-item-name">Keluar</a>
				</div>
			</li>
		</div>
	</div>
</div>
<span class="linedivide1"></span>

<div class="header-wrapicon2">
	<img src="asset/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
	<?php
		$query = mysql_query("SELECT * FROM tmp_pembelian WHERE kd_pelanggan='$KodePelanggan'");

		$TotalBarang = 0;

		while ($row = mysql_fetch_array($query)) {
			$TotalBarang	= $TotalBarang + $row['jumlah'];
		}
	?>
	<span class="header-icons-noti">
		<?php echo $TotalBarang; ?>
	</span>

	<!-- Header cart noti -->
	<div class="header-cart header-dropdown">
		
		<ul class="header-cart-wrapitem">
			<?php
				$query = mysql_query("SELECT ukuran.*, stock.*, tmp_pembelian.*, barang.* FROM barang JOIN stock ON barang.kd_barang = stock.kd_barang JOIN ukuran ON stock.kd_ukuran = ukuran.kd_ukuran JOIN tmp_pembelian ON stock.kd_invent = tmp_pembelian.kd_invent WHERE tmp_pembelian.kd_pelanggan='$KodePelanggan'");

				$Subtotal = 0; 
				$Total = 0;
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
			<li class="header-cart-item">
				<div class="header-cart-item-img">
					<img src="admin/upload/barang/<?php echo $fileGambar; ?>" alt="IMG">
				</div>
				<div class="header-cart-item-txt">
					<a href="index.php?pages=product-detail&kd_barang=<?php echo $row['kd_barang']; ?>" class="header-cart-item-name"><?php echo $row['nm_barang']; ?> - (<?php echo $row['nm_ukuran']; ?>)</a>

					<span class="header-cart-item-info"><?php echo $row['jumlah'] ;?> x Rp. <?php echo $row['harga']; ?>,-</span>
				</div>
			</li>
			<?php } ?>
		</ul>
		<div class="header-cart-total">
			Total: Rp.<?php echo $Total; ?>,-
		</div>
		<div class="header-cart-buttons">
			<div class="header-cart-wrapbtn">
				<!-- Button -->
				<a href="index.php?pages=cart-product" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">View Cart</a>
			</div>
		</div>
	</div>
</div>
<span class="linedivide1"></span>

<div class="header-wrapicon2">
	<img src="asset/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
	<span class="header-icons-noti">0</span>

	<!-- Header cart noti -->
	<div class="header-cart header-dropdown">
		<ul class="header-cart-wrapitem">
			<li class="header-cart-item">
				<div class="header-cart-item-img">
					<img src="asset/images/item-cart-01.jpg" alt="IMG">
				</div>
				<div class="header-cart-item-txt">
					<a href="#" class="header-cart-item-name">White Shirt With Pleat Detail Back</a>

					<span class="header-cart-item-info">1 x $19.00</span>
				</div>
			</li>
		</ul>
		<div class="header-cart-total">
			Total: $75.00
		</div>
		<div class="header-cart-buttons">
			<div class="header-cart-wrapbtn">
				<!-- Button -->
				<a href="index.php?pages=cart-product" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">View Cart</a>
			</div>
			<div class="header-cart-wrapbtn">
				<!-- Button -->
				<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">Check Out</a>
			</div>
		</div>
	</div>
</div>
<?php } ?>