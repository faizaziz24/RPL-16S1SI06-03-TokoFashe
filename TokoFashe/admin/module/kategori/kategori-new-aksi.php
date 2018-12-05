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
      $target   = $basepath."/project-ecommerce/admin/upload/kategori/".basename($_FILES['gb_kategori']['name']);
      $gb_kategori = basename($_FILES['gb_kategori']['name']);

      $queryInsert= mysql_query("INSERT INTO kategori (nm_kategori, kd_jenis, inisial_kategori, gb_kategori, pj_kategori, biaya_buat, disc_kategori) VALUES ('$_POST[nm_kategori]', '$_POST[cmbJenis]', '$_POST[inisial_kategori]', '$gb_kategori', '$_POST[pj_kategori]', '$_POST[biaya_buat]', '$_POST[disc_kategori]')");

      if ($queryInsert) {
        if (move_uploaded_file($_FILES['gb_kategori']['tmp_name'], $target)) {
          echo "<script>
                alert('Data kategori Berhasil Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=categories';
                </script>";
        }else{
          echo "<script>
                alert('Gambar Gagal Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=categories';
                </script>";
        }
      }else{
          echo "<script>
                alert('Data kategori Gagal Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=categories';
                </script>";
      }
  	}
?>