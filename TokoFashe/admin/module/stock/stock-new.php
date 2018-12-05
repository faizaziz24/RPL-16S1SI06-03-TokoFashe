<?php
  $dataBarang = isset($_POST['cmbBarang']) ? $_POST['cmbBarang'] : '';
  $dataBahan  = isset($_POST['cmbBahan']) ? $_POST['cmbBahan'] : '';
  $dataUkuran = isset($_POST['cmbUkuran']) ? $_POST['cmbUkuran'] : '';
?>
<section class="content-header">
      <h1>
        Persediaan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=stock"><i class="fa fa-cubes"></i> Persediaan</a></li>
        <li class="active"><i class="fa fa-plus"></i> Persediaan Baru</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Persediaan Baru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../admin/module/stock/stock-new-aksi.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Barang</label>
                  <div class="col-sm-9">
                    <select name="cmbBarang" class="form-control select2">
                        <?php
                          $query_proc = mysql_query("SELECT * FROM barang ORDER BY kd_barang");
                          while ($kat = mysql_fetch_array($query_proc)) {
                          if ($kat['kd_barang']== $dataBarang) {
                            $cek = " selected";
                          } else { $cek=""; }
                          echo "<option value='$kat[kd_barang]' $cek>$kat[nm_barang] </option>";
                          }
                        ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Jenis Bahan</label>
                  <div class="col-sm-9">
                    <select name="cmbBahan" class="form-control select2">
                        <?php
                          $query_mat = mysql_query("SELECT * FROM bahan ORDER BY kd_bahan");
                          while ($kat = mysql_fetch_array($query_mat)) {
                          if ($kat['kd_bahan']== $dataBahan) {
                            $cek = " selected";
                          } else { $cek=""; }
                          echo "<option value='$kat[kd_bahan]' $cek>$kat[nm_bahan] </option>";
                          }
                        ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Ukuran</label>
                  <div class="col-sm-9">
                    <select name="cmbUkuran" class="form-control select2">
                        <?php
                          $query_size = mysql_query("SELECT * FROM ukuran ORDER BY kd_ukuran");
                          while ($kat = mysql_fetch_array($query_size)) {
                          if ($kat['kd_ukuran']== $dataUkuran) {
                            $cek = " selected";
                          } else { $cek=""; }
                          echo "<option value='$kat[kd_ukuran]' $cek>$kat[nm_ukuran] </option>";
                          }
                        ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Jumlah Stock</label>
                  <div class="col-sm-9">
                    <input type="text" name="jumlah_stok" class="form-control" placeholder="Jumlah Stock Barang ...">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->