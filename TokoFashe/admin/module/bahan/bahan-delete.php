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

      $kd_bahan     = $_GET['kd_bahan'];
      $hapus_bahan  = mysql_query("DELETE FROM bahan WHERE kd_bahan='$kd_bahan'");

      if ($hapus_bahan) {
        echo "<script>
                alert('Data Bahan Berhasil Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=material';
              </script>";
      }else{
        echo "<script>
                alert('Data Bahan Gagal Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=material';
              </script>";
      }
  }
?>