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

      $kd_jenis     = $_GET['kd_jenis'];
      $hapus_jenis  = mysql_query("DELETE FROM jenis WHERE kd_jenis='$kd_jenis'");

      if ($hapus_jenis) {
        echo "<script>
                alert('Data Jenis Berhasil Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=kinds';
              </script>";
      }else{
        echo "<script>
                alert('Data Jenis Gagal Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=kinds';
              </script>";
      }
  }
?>