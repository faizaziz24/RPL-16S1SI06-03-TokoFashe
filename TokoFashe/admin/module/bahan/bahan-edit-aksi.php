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

        $queryUpdate= mysql_query("UPDATE bahan SET nm_bahan='$_POST[nm_bahan]',pj_bahan='$_POST[pj_bahan]', biaya_buat='$_POST[biaya_buat]' WHERE kd_bahan='$_POST[kd_bahan]'");

	    if ($queryUpdate) {
	      	echo "<script>
                alert('Data Bahan Berhasil Diupdate'); 
                window.location = '$admin_url'+'adminweb.php?module=material';
              </script>";
	    }else{
	        echo "<script>
                alert('Data Bahan Gagal Diupdate'); 
                window.location = '$admin_url'+'adminweb.php?module=material';
              </script>";
      }
    }
?>