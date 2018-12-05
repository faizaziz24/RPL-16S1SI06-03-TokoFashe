<?php
    $kd_kota      = $_GET['kd_kota'];
    $query_kota   = mysql_query("SELECT * FROM kota WHERE kd_kota='$kd_kota'");
    $data_kota    = mysql_fetch_array($query_kota);
?>
<section class="content-header">
      <h1>
        Kota
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=city"><i class="fa fa-home"></i> Kota</a></li>
        <li class="active"><i class="fa fa-edit"></i> Kota Settings</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Kota Settings</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../admin/module/ongkir/kota-edit-aksi.php" method="post">
              <input type="hidden" name="kd_kota" class="form-control" value="<?php echo $data_kota['kd_kota'];?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Kota</label>
                  <div class="col-sm-9">
                    <input type="text" name="nm_kota" class="form-control" placeholder="Nama Kota" value="<?php echo $data_kota['nm_kota'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Provinsi</label>
                  <div class="col-sm-9">
                    <select name="cmbProvinsi" class="form-control">
                      <?php
                        $query_prov = mysql_query("SELECT * FROM provinsi");
                        while ($kat = mysql_fetch_array($query_prov)) { ?>
                        
                        <option value="<?php echo $kat['kd_provinsi'];?>"<?php if($kat['kd_provinsi']==$data_kota['kd_provinsi']):?> selected="selected" <?php endif; ?>><?php echo $kat['nm_provinsi'];?></option>"

                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Biaya Ongkir</label>
                  <div class="col-sm-9">
                    <input type="text" name="biaya_kirim" class="form-control" placeholder="Biaya Ongkir" value="<?php echo $data_kota['biaya_kirim'];?>">
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