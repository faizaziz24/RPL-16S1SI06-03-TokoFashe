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

        $queryUpdate= mysql_query("UPDATE ukuran SET nm_ukuran='$_POST[nm_ukuran]', usia_ukuran='$_POST[usia_ukuran]', biaya_buat='$_POST[biaya_buat]' WHERE kd_ukuran='$_POST[kd_ukuran]'");

	    if ($queryUpdate) {
	      	echo "<script>
                alert('Data Ukuran Berhasil Diupdate'); 
                window.location = '$admin_url'+'adminweb.php?module=size';
              </script>";
	    }else{
	        echo "<script>
                alert('Data Ukuran Gagal Diupdate'); 
                window.location = '$admin_url'+'adminweb.php?module=size';
              </script>";
      }
    }
?>