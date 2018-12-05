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

      	$queryInsert= mysql_query("INSERT INTO waktu (lama_waktu, biaya_buat) VALUES ('$_POST[lama_waktu]','$_POST[biaya_buat]')");

	    if ($queryInsert) {
	      	echo "<script>
                alert('Data Waktu Berhasil Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=time';
              	</script>";
	    }else{
        	echo "<script>
                alert('Data Waktu Gagal Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=time';
              	</script>";
        }
  	}
?>