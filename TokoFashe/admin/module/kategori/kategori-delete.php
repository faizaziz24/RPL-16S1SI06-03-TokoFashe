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

      $kd_kategori= $_GET['kd_kategori'];
      $kat_id   = mysql_query("SELECT gb_kategori FROM kategori WHERE kd_kategori='$kd_kategori'");
      $kat_ids  = mysql_fetch_array($kat_id);

      $filename = $basepath."/project-ecommerce/admin/upload/kategori/".$kat_ids['gb_kategori'];

      unlink($filename);

      $hapus_kat  = mysql_query("DELETE FROM kategori WHERE kd_kategori='$kd_kategori'");

      if ($hapus_kat) {
        echo "<script>
                alert('Data kategori Berhasil Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=categories';
              </script>";
      }else{
        echo "<script>
                alert('Data kategori Gagal Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=categories';
              </script>";
      }
  }
?>