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

        $queryUpdate= mysql_query("UPDATE kota SET nm_kota='$_POST[nm_kota]', kd_provinsi = '$_POST[cmbProvinsi]', biaya_kirim='$_POST[biaya_kirim]' WHERE kd_kota='$_POST[kd_kota]'");

	    if ($queryUpdate) {
        echo "<script>
                alert('Data Provinsi Berhasil Diupdate'); 
                window.location = '$admin_url'+'adminweb.php?module=city';
              </script>";
      }else{
        echo "<script>
                alert('Data Provinsi Gagal Diupdate'); 
                window.location = '$admin_url'+'adminweb.php?module=city';
              </script>";
	    }
    }
?>