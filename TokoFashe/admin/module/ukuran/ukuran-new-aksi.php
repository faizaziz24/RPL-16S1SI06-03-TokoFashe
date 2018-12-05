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

      	$queryInsert= mysql_query("INSERT INTO ukuran (nm_ukuran, usia_ukuran, biaya_buat) VALUES ('$_POST[nm_ukuran]','$_POST[usia_ukuran]', '$_POST[biaya_buat]')");

	    if ($queryInsert) {
	      	echo "<script>
                alert('Data Ukuran Berhasil Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=size';
              	</script>";
	    }else{
        	echo "<script>
                alert('Data Ukuran Gagal Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=size';
              	</script>";
        }
  	}
?>