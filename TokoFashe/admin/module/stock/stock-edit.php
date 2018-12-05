<?php
  $kd_invent    = $_GET['kd_invent'];
  $query_invent = mysql_query("SELECT * FROM stock WHERE kd_invent='$kd_invent'");
  $data_invent  = mysql_fetch_array($query_invent);
?>
<section class="content-header">
      <h1>
        Persediaan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=stock"><i class="fa fa-cubes"></i> Persediaan</a></li>
        <li class="active"><i class="fa fa-edit"></i> Persediaan Settings</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Persediaan Settings</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../admin/module/stock/stock-edit-aksi.php" method="post">
              <input type="hidden" name="kd_invent" class="form-control" value="<?php echo $data_invent['kd_invent'];?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Barang</label>
                  <div class="col-sm-9">
                    <select name="cmbBarang" class="form-control select2">
                      <?php
                        $query_proc = mysql_query("SELECT * FROM barang");
                        while ($kat = mysql_fetch_array($query_proc)) { ?>
                        
                        <option value="<?php echo $kat['kd_barang'];?>"<?php if($kat['kd_barang']==$data_invent['kd_barang']):?> selected="selected" <?php endif; ?>><?php echo $kat['nm_barang'];?></option>"

                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Jenis Bahan</label>
                  <div class="col-sm-9">
                    <select name="cmbBahan" class="form-control select2">
                      <?php
                        $query_mat = mysql_query("SELECT * FROM bahan");
                        while ($kat = mysql_fetch_array($query_mat)) { ?>
                        
                        <option value="<?php echo $kat['kd_bahan'];?>"<?php if($kat['kd_bahan']==$data_invent['kd_bahan']):?> selected="selected" <?php endif; ?>><?php echo $kat['nm_bahan'];?></option>"
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Ukuran</label>
                  <div class="col-sm-9">
                    <select name="cmbUkuran" class="form-control select2">
                        <?php
                        $query_size = mysql_query("SELECT * FROM ukuran");
                        while ($kat = mysql_fetch_array($query_size)) { ?>
                        
                        <option value="<?php echo $kat['kd_ukuran'];?>"<?php if($kat['kd_ukuran']==$data_invent['kd_ukuran']):?> selected="selected" <?php endif; ?>><?php echo $kat['nm_ukuran'];?></option>"

                        <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Jumlah Stock</label>
                  <div class="col-sm-9">
                    <input type="text" name="jumlah_stok" class="form-control" placeholder="Jumlah Stock Barang ..." value="<?php echo $data_invent['jumlah_stok'];?>">
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