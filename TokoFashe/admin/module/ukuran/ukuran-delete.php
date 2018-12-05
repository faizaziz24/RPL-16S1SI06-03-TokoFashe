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

      $kd_ukuran     = $_GET['kd_ukuran'];
      $hapus_ukuran  = mysql_query("DELETE FROM ukuran WHERE kd_ukuran='$kd_ukuran'");

      if ($hapus_ukuran) {
        echo "<script>
                alert('Data Ukuran Berhasil Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=size';
              </script>";
      }else{
        echo "<script>
                alert('Data Ukuran Gagal Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=size';
              </script>";
      }
  }
?>