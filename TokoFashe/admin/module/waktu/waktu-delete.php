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

      $kd_waktu     = $_GET['kd_waktu'];
      $hapus_waktu  = mysql_query("DELETE FROM waktu WHERE kd_waktu='$kd_waktu'");

      if ($hapus_waktu) {
        echo "<script>
                alert('Data Waktu Berhasil Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=time';
              </script>";
      }else{
        echo "<script>
                alert('Data Waktu Gagal Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=time';
              </script>";
      }
  }
?>