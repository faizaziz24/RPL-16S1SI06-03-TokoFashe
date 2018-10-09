<?php
  include "../../library/config.php";
  include "../../library/koneksi.php";


  if (isset($_POST["kd_bahan"]) && !empty($_POST["kd_bahan"])) {

    $query_sz = mysql_query("SELECT DISTINCT ukuran.kd_ukuran, ukuran.nm_ukuran FROM ukuran INNER JOIN stock ON ukuran.kd_ukuran = stock.kd_ukuran WHERE stock.kd_bahan =".$_POST['kd_bahan']."");

    $jml = mysql_num_rows($query_sz);

    if ($jml > 0) {
      echo "<option value='kosong'>Pilih Ukuran yang Anda Inginkan</option>";
      while ($size = mysql_fetch_array($query_sz)) {
         echo "<option value='$size[kd_ukuran]'>$size[nm_ukuran]</option>";
      }
    }else{
      echo "<option value='kosong'>Ukuran Tidak Tersedia </option>";
    }
  }

  if (isset($_POST["kd_provinsi"]) && !empty($_POST["kd_provinsi"])) {

    $query = mysql_query("SELECT * FROM kota WHERE kd_provinsi=".$_POST['kd_provinsi']."");

    $jml = mysql_num_rows($query);

    if ($jml > 0) {
      echo "<option value='kosong'>Pilih Kota Anda</option>";
      while ($row = mysql_fetch_array($query)) {
         echo "<option value='$row[kd_kota]'>$row[nm_kota]</option>";
      }
    }else{
      echo "<option value='kosong'>Kota Tidak Tersedia </option>";
    }
  }
?>