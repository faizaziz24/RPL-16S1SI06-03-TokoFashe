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

      	$queryInsert= mysql_query("INSERT INTO stock (kd_barang, kd_bahan, kd_ukuran, jumlah_stok) VALUES ('$_POST[cmbBarang]','$_POST[cmbBahan]', '$_POST[cmbUkuran]', $_POST[jumlah_stok])");

	    if ($queryInsert) {
	      	echo "<script>
                alert('Data Persediaan Berhasil Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=stock';
              	</script>";
	    }else{
        	echo "<script>
                alert('Data Persediaan Gagal Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=stock';
              	</script>";
        }
  	}
?>