<?php
  include "../../library/config.php";
  include "../../library/koneksi.php";


  if (isset($_POST["kd_jenis"]) && !empty($_POST["kd_jenis"])) {

    $querykat = mysql_query("SELECT * FROM kategori WHERE kd_jenis =".$_POST['kd_jenis']."");

    $kat = mysql_num_rows($querykat);

    if ($kat > 0) {
      echo "<option value='kosong'>Pilih kategori Barang</option>";

      while ($row = mysql_fetch_array($querykat)) {
         echo "<option value='$row[kd_kategori]'>$row[nm_kategori]</option>";
      }
    }else{
      echo "<option value='kosong'>kategori Tidak Tersedia </option>";
    }
  }

  if (isset($_POST["kd_kategori"]) && !empty($_POST["kd_kategori"])) {

    $queryl = mysql_query("SELECT * FROM bahan");

    $bhn    = mysql_num_rows($queryl);

    if ($bhn > 0) {
      echo "<option value='kosong'>Pilih Bahan Barang</option>";

      while ($row = mysql_fetch_array($queryl)) {
         echo "<option value='$row[kd_bahan]'>$row[nm_bahan]</option>";
      }
    }else{
      echo "<option value='kosong'>Bahan Tidak Tersedia </option>";
    }
  } 

  if (isset($_POST["kd_bahan"]) && !empty($_POST["kd_bahan"])) {

    $querys = mysql_query("SELECT * FROM ukuran");

    $sz    = mysql_num_rows($querys);

    if ($sz > 0) {
      echo "<option value='kosong'>Pilih Ukuran Barang</option>";

      while ($row = mysql_fetch_array($querys)) {
         echo "<option value='$row[kd_ukuran]'>$row[nm_ukuran]</option>";
      }
    }else{
      echo "<option value='kosong'>Ukuran Tidak Tersedia </option>";
    }
  } 

  if (isset($_POST["kd_ukuran"]) && !empty($_POST["kd_ukuran"])) {

    $queryt = mysql_query("SELECT * FROM waktu");

    $tm    = mysql_num_rows($queryt);

    if ($tm > 0) {
      echo "<option value='kosong'>Pilih Lama Waktu Penyelesaian</option>";

      while ($row = mysql_fetch_array($queryt)) {
         echo "<option value='$row[kd_waktu]'>$row[lama_waktu] hari</option>";
      }
    }else{
      echo "<option value='kosong'>Ukuran Tidak Tersedia </option>";
    }
  } 
?>