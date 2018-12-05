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

      
      # UPLOAD GAMBAR MASIH ERROR JADI TIDAK DICOPY
      $target   = $basepath."/project-ecommerce/admin/upload/barang/".basename($_FILES['file_gambar']['name']);
      $file_gambar = basename($_FILES['file_gambar']['name']);

      $queryInsert= mysql_query("INSERT INTO barang (nm_barang, kd_kategori, keterangan, harga_barang, file_gambar, disc_barang) VALUES ('$_POST[nm_barang]', '$_POST[cmbKategori]', '$_POST[keterangan]','$_POST[harga_barang]', '$file_gambar', '$_POST[disc_barang]')");

      if ($queryInsert) {
        if (move_uploaded_file($_FILES['file_gambar']['tmp_name'], $target)) {
          echo "<script>
                alert('Data Barang Berhasil Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=product';
                </script>";
        }else{
          echo "<script>
                alert('Gambar Gagal Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=product';
                </script>";
        }
      }else{
          echo "<script>
                alert('Data Barang Gagal Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=product';
                </script>";
      }
  	}
?>