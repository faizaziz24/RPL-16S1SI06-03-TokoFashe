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

        $queryUpdate= mysql_query("UPDATE stock SET kd_barang='$_POST[cmbBarang]', kd_bahan='$_POST[cmbBahan]', kd_ukuran='$_POST[cmbUkuran]', jumlah_stok='$_POST[jumlah_stok]' WHERE kd_invent='$_POST[kd_invent]'");

      if ($queryUpdate) {
        echo "<script>
                alert('Data Persediaan Berhasil Diupdate'); 
                window.location = '$admin_url'+'adminweb.php?module=stock';
              </script>";
      }else{
        echo "<script>
                alert('Data Persediaan Gagal Diupdate'); 
                window.location = '$admin_url'+'adminweb.php?module=stock';
              </script>";
      }
    }
?>