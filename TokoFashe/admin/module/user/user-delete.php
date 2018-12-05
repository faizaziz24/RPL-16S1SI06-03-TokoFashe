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

      $kd_pelanggan    =$_GET['kd_pelanggan'];
      $hapus_pelanggan =mysql_query("DELETE FROM pelanggan WHERE kd_pelanggan='$kd_pelanggan' ");

      if ($hapus_pelanggan) {
        echo "<script>
                alert('Data Pelanggan Berhasil Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=user-data';
              </script>";
      }else{
        echo "<script>
                alert('Data Pelanggan Gagal Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=user-data';
              </script>";
      }
  }
?>