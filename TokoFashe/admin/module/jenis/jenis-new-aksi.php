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

        $queryInsert= mysql_query("INSERT INTO jenis (nm_jenis, pj_jenis) VALUES ('$_POST[nm_jenis]','$_POST[pj_jenis]')");

      if ($queryInsert) {
          echo "<script>
                alert('Data Jenis Berhasil Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=kinds';
                </script>";
      }else{
          echo "<script>
                alert('Data Jenis Gagal Dimasukkan'); 
                window.location = '$admin_url'+'adminweb.php?module=kinds';
                </script>";
        }
    }
?>