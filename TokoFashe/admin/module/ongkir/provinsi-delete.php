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

      $kd_provinsi     = $_GET['kd_provinsi'];
      $hapus_provinsi  = mysql_query("DELETE FROM provinsi WHERE kd_provinsi='$kd_provinsi' ");

      if ($hapus_provinsi) {
        echo "<script>
                alert('Data Provinsi Berhasil Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=province';
              </script>";
      }else{
        echo "<script>
                alert('Data Provinsi Gagal Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=province';
              </script>";
      }
  }
?>