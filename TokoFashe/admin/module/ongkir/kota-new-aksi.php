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

      	$queryInsert= mysql_query("INSERT INTO kota (nm_kota,kd_provinsi, biaya_kirim) VALUES ('$_POST[nm_kota]', '$_POST[cmbProvinsi]', '$_POST[biaya_kirim]');");

	    if ($queryInsert) {
	      	echo "<script>
                alert('Data Kota Berhasil Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=city';
              	</script>";
	    }else{
        	echo "<script>
                alert('Data Kota Gagal Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=city';
              	</script>";
        }
  	}
?>