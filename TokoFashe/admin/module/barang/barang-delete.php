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

      $kd_barang = $_GET['kd_barang'];
      $proc_id   = mysql_query("SELECT file_gambar FROM barang WHERE kd_barang='$kd_barang'");
      $proc_ids  = mysql_fetch_array($proc_id);

      $filename  = $basepath."/project-ecommerce/admin/upload/barang/".$kat_ids['file_gambar'];

      unlink($filename);

      $hapus_proc= mysql_query("DELETE FROM barang WHERE kd_barang='$kd_barang'");

      if ($hapus_proc) {
        echo "<script>
                alert('Data Barang Berhasil Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=product';
              </script>";
      }else{
        echo "<script>
                alert('Data Barang Gagal Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=product';
              </script>";
      }
  }
?>