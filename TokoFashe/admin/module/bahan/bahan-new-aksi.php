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

      	$queryInsert= mysql_query("INSERT INTO bahan (nm_bahan, pj_bahan, biaya_buat) VALUES ('$_POST[nm_bahan]','$_POST[pj_bahan]', '$_POST[biaya_buat]')");

	    if ($queryInsert) {
	      	echo "<script>
                alert('Data Bahan Berhasil Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=material';
              	</script>";
	    }else{
        	echo "<script>
                alert('Data Bahan Gagal Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=material';
              	</script>";
        }
  	}
?>