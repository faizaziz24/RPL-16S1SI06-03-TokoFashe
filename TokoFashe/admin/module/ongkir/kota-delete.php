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

      $kd_kota     = $_GET['kd_kota'];
      $hapus_kota  = mysql_query("DELETE FROM kota WHERE kd_kota='$kd_kota'");

      if ($hapus_kota) {
        echo "<script>
                alert('Data Kota Berhasil Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=city';
              </script>";
      }else{
        echo "<script>
                alert('Data Kota Gagal Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=city';
              </script>";
      }
  }
?>