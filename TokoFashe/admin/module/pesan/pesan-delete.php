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

      $kd_pesan     = $_GET['kd_pesan'];
      $hapus_pesan  = mysql_query("DELETE FROM pesan WHERE kd_pesan='$kd_pesan'");

      if ($hapus_pesan) {
        echo "<script>
                alert('Data Pesan Berhasil Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=pesan-data';
              </script>";
      }else{
        echo "<script>
                alert('Data Pesan Gagal Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=pesan-data';
              </script>";
      }
  }
?>