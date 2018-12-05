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

        $queryUpdate= mysql_query("UPDATE waktu SET lama_waktu='$_POST[lama_waktu]', biaya_buat='$_POST[biaya_buat]' WHERE kd_waktu='$_POST[kd_waktu]'");

      if ($queryUpdate) {
          echo "<script>
                alert('Data Waktu Berhasil Diupdate'); 
                window.location = '$admin_url'+'adminweb.php?module=time';
              </script>";
      }else{
          echo "<script>
                alert('Data Waktu Gagal Diupdate'); 
                window.location = '$admin_url'+'adminweb.php?module=time';
              </script>";
      }
    }
?>