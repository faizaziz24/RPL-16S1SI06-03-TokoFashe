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

      	$queryInsert= mysql_query("INSERT INTO provinsi (nm_provinsi, nm_ibukota) VALUES ('$_POST[nm_provinsi]', '$_POST[nm_ibukota]')");

	    if ($queryInsert) {
	      	echo "<script>
                alert('Data Provinsi Berhasil Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=province';
              	</script>";
	    }else{
        	echo "<script>
                alert('Data Provinsi Gagal Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=province';
              	</script>";
      }
  	}
?>