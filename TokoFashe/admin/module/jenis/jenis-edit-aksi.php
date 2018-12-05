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

        $queryUpdate= mysql_query("UPDATE jenis SET nm_jenis='$_POST[nm_jenis]',pj_jenis='$_POST[pj_jenis]'WHERE kd_jenis='$_POST[kd_jenis]'");

	    if ($queryUpdate) {
	      	echo "<script>
                alert('Data Jenis Berhasil Diupdate'); 
                window.location = '$admin_url'+'adminweb.php?module=kinds';
              </script>";
	    }else{
	        echo "<script>
                alert('Data Jenis Gagal Diupdate'); 
                window.location = '$admin_url'+'adminweb.php?module=kinds';
              </script>";
      }
    }
?>