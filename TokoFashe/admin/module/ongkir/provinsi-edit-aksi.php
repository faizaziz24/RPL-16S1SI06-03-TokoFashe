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

        $queryUpdate= mysql_query("UPDATE provinsi SET nm_provinsi='$_POST[nm_provinsi]', 
      				  nm_ibukota='$_POST[nm_ibukota]' WHERE kd_provinsi='$_POST[kd_provinsi]'");

	    if ($queryUpdate) {
	      	echo "<script>
                alert('Data Provinsi Berhasil Diupdate'); 
                window.location = '$admin_url'+'adminweb.php?module=province';
              </script>";
	    }else{
	        echo "<script>
                alert('Data Provinsi Gagal Diupdate'); 
                window.location = '$admin_url'+'adminweb.php?module=province';
              </script>";
      	}
    }
?>