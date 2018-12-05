<?php
	session_start();

	if (empty($_SESSION['nameuser']) AND empty($_SESSION['passuser'])) {

	    # APABILA BELUM MELAKUKAN LOGIN
	    echo "<center>Untuk mengakses modul, Anda harus melakukan login terlebih dahulu.<br>";
	    echo "<a href=../../index.php><b>LOGIN DISINI!</b></a></center>";
  	}else{

  	  # APABILA SUDAH MELAKUKAN LOGIN
      include "../../../library/config.php";
      include "../../../library/koneksi.php";

      if ($_FILES['file_gambar']['error'] != UPLOAD_ERR_NO_FILE) {

        
        $proc_id   = mysql_query("SELECT file_gambar FROM barang WHERE kd_barang='$_POST[kd_barang]'");
        $proc_ids  = mysql_fetch_array($proc_id);
        $filename  = $basepath."/project-ecommerce/admin/upload/barang/".$proc_ids['file_gambar'];

        unlink($filename);

        $target      = $basepath."/project-ecommerce/admin/upload/kategori/".basename($_FILES['file_gambar']['name']);
        $file_gambar = basename($_FILES['file_gambar']['name']);

        move_uploaded_file($_FILES['file_gambar']['tmp_name'], $target);

        $queryUpdate = mysql_query("UPDATE barang SET kd_kategori='$_POST[cmbKategori]', nm_barang='$_POST[nm_barang]', keterangan='$_POST[keterangan]', file_gambar='$file_gambar', disc_barang='$_POST[disc_barang]', harga_barang='$_POST[harga_barang]' WHERE kd_barang='$_POST[kd_barang]'");

      }else{
        $queryUpdate = mysql_query("UPDATE barang SET kd_kategori='$_POST[cmbKategori]', nm_barang='$_POST[nm_barang]', keterangan='$_POST[keterangan]', disc_barang='$_POST[disc_barang]', harga_barang='$_POST[harga_barang]' WHERE kd_barang='$_POST[kd_barang]'");
      }
      

	    if ($queryUpdate) {
	      	echo "<script>
                alert('Data Kategori Berhasil Diupdate'); 
                window.location = '$admin_url'+'adminweb.php?module=product';
              </script>";
	    }else{
	        echo "<script>
                alert('Data Kategori Gagal Diupdate'); 
                window.location = '$admin_url'+'adminweb.php?module=product';
              </script>";
      }
  }
?>