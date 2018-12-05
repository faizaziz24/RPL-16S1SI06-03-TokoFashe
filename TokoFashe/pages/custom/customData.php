<?php
  include "../../library/config.php";
  include "../../library/koneksi.php";

  if (isset($_POST["kd_bahan"]) && !empty($_POST["kd_bahan"])) {

    $query_sz = mysql_query("SELECT * FROM Ukuran WHERE kd_bahan =".$_POST['kd_bahan']."");

    $jml = mysql_num_rows($query_sz);

    if ($jml > 0) {
      echo "<option value=''>Pilih Ukuran yang Anda Inginkan</option>";
      while ($size = mysql_fetch_array($query_sz)) {
         echo "<option value='$size[kd_ukuran]'>$size[nm_ukuran]</option>";
      }
    }else{
      echo "<option value=''>Ukuran Tidak Tersedia </option>";
    }
  }
?>