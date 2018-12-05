<?php
  $dataProvinsi = isset($_POST['cmbProvinsi']) ? $_POST['cmbProvinsi'] : '';
?>
<section class="content-header">
      <h1>
        Kota
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=province"><i class="fa fa-home"></i> Kota</a></li>
        <li class="active"><i class="fa fa-plus"></i> Kota Baru</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Kota Baru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../admin/module/ongkir/kota-new-aksi.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Kota</label>
                  <div class="col-sm-9">
                    <input type="text" name="nm_kota" class="form-control" placeholder="Nama Kota">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Provinsi</label>
                  <div class="col-sm-9">
                    <select name="cmbProvinsi" class="form-control">
                        <?php
                          $query_prov = mysql_query("SELECT * FROM provinsi ORDER BY kd_provinsi");
                          while ($kat = mysql_fetch_array($query_prov)) {
                          if ($kat['kd_provinsi']== $dataProvinsi) {
                            $cek = " selected";
                          } else { $cek=""; }
                          echo "<option value='$kat[kd_provinsi]' $cek>$kat[nm_provinsi] </option>";
                          }
                        ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Biaya Ongkir</label>
                  <div class="col-sm-9">
                    <input type="text" name="biaya_kirim" class="form-control" placeholder="Biaya Ongkir">
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