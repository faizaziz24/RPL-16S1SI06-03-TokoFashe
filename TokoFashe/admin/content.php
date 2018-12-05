<?php
# Content Dashboard
if ($_GET['module']=='dashboard'){
	include "module/dashboard/dashboard.php";

# ===========================================================================================
# ===================================== MENU  PELANGGAN =====================================
# ===========================================================================================

# CONTENT PELANGGAN
}elseif ($_GET['module']=='user-data') {
	include "module/user/user-data.php";

# ===========================================================================================
# ===================================== MENU  PELANGGAN =====================================
# ===========================================================================================

# CONTENT PESAN
}elseif ($_GET['module']=='pesan-data') {
	include "module/pesan/pesan-data.php";

# READ PESAN
}elseif ($_GET['module']=='pesan-read') {
	include "module/pesan/pesan-read.php";

# ===========================================================================================
# ======================================= MENU BARANG =======================================
# ===========================================================================================

# CONTENT JENIS 
}elseif ($_GET['module']=='kinds') {
	include "module/jenis/jenis-data.php";

# NEW JENIS
}elseif ($_GET['module']=='kinds-new') {
	include "module/jenis/jenis-new.php";

# EDIT JENIS
}elseif ($_GET['module']=='kinds-edit') {
	include "module/jenis/jenis-edit.php";

# CONTENT KATEGORI 
}elseif ($_GET['module']=='categories') {
	include "module/kategori/kategori-data.php";

# NEW KATEGORI
}elseif ($_GET['module']=='categories-new') {
	include "module/kategori/kategori-new.php";

# EDIT KATEGORI
}elseif ($_GET['module']=='categories-edit') {
	include "module/kategori/kategori-edit.php";

# CONTENT BAHAN
}elseif ($_GET['module']=='material') {
	include "module/bahan/bahan-data.php";

# NEW BAHAN
}elseif ($_GET['module']=='material-new') {
	include "module/bahan/bahan-new.php";

# EDIT BAHAN 
}elseif ($_GET['module']=='material-edit') {
	include "module/bahan/bahan-edit.php";

# CONTENT UKURAN
}elseif ($_GET['module']=='size') {
	include "module/ukuran/ukuran-data.php";

# NEW UKURAN 		
}elseif ($_GET['module']=='size-new') {
	include "module/ukuran/ukuran-new.php";

# EDIT UKURAN
}elseif ($_GET['module']=='size-edit') {
	include "module/ukuran/ukuran-edit.php";

# CONTENT WAKTU
}elseif ($_GET['module']=='time') {
	include "module/waktu/waktu-data.php";

# NEW WAKTU		
}elseif ($_GET['module']=='time-new') {
	include "module/waktu/waktu-new.php";

# EDIT WAKTU
}elseif ($_GET['module']=='time-edit') {
	include "module/waktu/waktu-edit.php";

# CONTENT BARANG
}elseif ($_GET['module']=='product') {
	include "module/barang/barang-data.php";

# NEW BARANG	
}elseif ($_GET['module']=='product-new') {
	include "module/barang/barang-new.php";

# EDIT BARANG
}elseif ($_GET['module']=='product-edit') {
	include "module/barang/barang-edit.php";

# ===========================================================================================
# BELUM DISELESAIKAN KAK ====================================================================

# CONTENT STOCK
}elseif ($_GET['module']=='stock') {
	include "module/stock/stock-data.php";

# NEW STOCK
}elseif ($_GET['module']=='stock-new') {
	include "module/stock/stock-new.php";

# EDIT STOCK
}elseif ($_GET['module']=='stock-edit') {
	include "module/stock/stock-edit.php";

# ===========================================================================================
# ===================================== MENU  TRANSAKSI =====================================
# ===========================================================================================

# CONTENT PEMBELIAN
}elseif ($_GET['module']=='sell') {
	include "module/pembelian/pembelian-data.php";


# ===========================================================================================
# ======================================= MENU ONGKIR =======================================
# ===========================================================================================

# CONTENT KOTA 
}elseif ($_GET['module']=='city') {
	include "module/ongkir/kota-data.php";

# NEW KOTA 
}elseif ($_GET['module']=='city-new') {
	include "module/ongkir/kota-new.php";

# EDIT KOTA
}elseif ($_GET['module']=='city-edit') {
	include "module/ongkir/kota-edit.php";

# CONTENT PROVINSI
}elseif ($_GET['module']=='province') {
	include "module/ongkir/provinsi-data.php";

# NEW PROVINSI
}elseif ($_GET['module']=='province-new') {
	include "module/ongkir/provinsi-new.php";

# EDIT PROVINSI
}elseif ($_GET['module']=='provinsi-edit') {
	include "module/ongkir/provinsi-edit.php";

# ===========================================================================================
# ======================================= MENU  ADMIN =======================================
# ===========================================================================================

# EDIT ADMIN PASSWORD
}elseif ($_GET['module']=='admin') {
	include "module/admin/admin.php";

# EDIT ADMIN USERNAME
}elseif ($_GET['module']=='admin-id') {
	include "module/admin/admin-id.php";

# EDIT ADMIN NAMA
}elseif ($_GET['module']=='admin-name') {
	include "module/admin/admin-name.php";


# ===========================================================================================
# ======================================= MENU KELUAR =======================================
# ===========================================================================================

# CONTENT LOGOUT
}elseif ($_GET['module']=='logout') {
	include "logout.php";
	
}else{
	echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}
?>