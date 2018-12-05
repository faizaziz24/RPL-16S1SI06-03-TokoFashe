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

      if ($_FILES['gb_kategori']['error'] != UPLOAD_ERR_NO_FILE) {

        
        $kat_id   = mysql_query("SELECT gb_kategori FROM kategori WHERE kd_kategori='$_POST[kd_kategori]'");
        $kat_ids  = mysql_fetch_array($kat_id);
        $filename = $basepath."/project-ecommerce/admin/upload/kategori/".$kat_ids['gb_kategori'];

        unlink($filename);

        $target   = $basepath."/project-ecommerce/admin/upload/kategori/".basename($_FILES['gb_kategori']['name']);
        $gb_kategori = basename($_FILES['gb_kategori']['name']);

        move_uploaded_file($_FILES['gb_kategori']['tmp_name'], $target);

        $queryUpdate= mysql_query("UPDATE kategori SET nm_kategori='$_POST[nm_kategori]', kd_jenis = '$_POST[cmbJenis]', inisial_kategori='$_POST[inisial_kategori]', pj_kategori='$_POST[pj_kategori]', biaya_buat='$_POST[biaya_buat]', disc_kategori='$_POST[disc_kategori]', gb_kategori='$gb_kategori' WHERE kd_kategori='$_POST[kd_kategori]'");
      }else{
        $queryUpdate= mysql_query("UPDATE kategori SET nm_kategori='$_POST[nm_kategori]', kd_jenis = '$_POST[cmbJenis]', inisial_kategori='$_POST[inisial_kategori]', pj_kategori='$_POST[pj_kategori]', biaya_buat='$_POST[biaya_buat]', disc_kategori='$_POST[disc_kategori]' WHERE kd_kategori='$_POST[kd_kategori]'");
      }
      

	    if ($queryUpdate) {
	      	echo "<script>
                alert('Data Kategori Berhasil Diupdate'); 
                window.location = '$admin_url'+'adminweb.php?module=categories';
              </script>";
	    }else{
	        echo "<script>
                alert('Data Kategori Gagal Diupdate'); 
                window.location = '$admin_url'+'adminweb.php?module=categories';
              </script>";
      	}
    }
?>