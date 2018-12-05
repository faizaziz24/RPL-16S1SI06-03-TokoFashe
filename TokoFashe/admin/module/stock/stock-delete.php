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

      $kd_invent     = $_GET['kd_invent'];
      $hapus_invent  = mysql_query("DELETE FROM stock WHERE kd_invent='$kd_invent'");

      if ($hapus_invent) {
        echo "<script>
                alert('Data Persediaan Berhasil Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=stock';
              </script>";
      }else{
        echo "<script>
                alert('Data Persediaan Gagal Dihapus'); 
                window.location = '$admin_url'+'adminweb.php?module=stock';
              </script>";
      }
  }
?>