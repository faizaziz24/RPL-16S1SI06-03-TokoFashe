<?php
  $kd_proc      = $_GET['kd_barang'];
  $query_proc   = mysql_query("SELECT * FROM barang WHERE kd_barang='$kd_proc'");
  $data_proc    = mysql_fetch_array($query_proc);
?>
<section class="content-header">
      <h1>
        Barang
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=product"><i class="fa fa-cube"></i> Barang</a></li>
        <li class="active"><i class="fa fa-edit"></i> Barang Settings</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Barang Settings</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../admin/module/barang/barang-edit-aksi.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="kd_barang" class="form-control" value="<?php echo $data_proc['kd_barang'];?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Barang</label>
                  <div class="col-sm-10">
                    <input type="text" name="nm_barang" class="form-control" placeholder="Nama Barang" value="<?php echo $data_proc['nm_barang'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kategori Barang</label>
                  <div class="col-sm-10">
                    <select name="cmbKategori" class="form-control">
                      <?php
                        $query_kat  = mysql_query("SELECT * FROM kategori");
                        while ($kat = mysql_fetch_array($query_kat)) { ?>
                        
                        <option value="<?php echo $kat['kd_kategori'];?>"<?php if($kat['kd_kategori']==$data_proc['kd_barang']):?> selected="selected" <?php endif; ?>><?php echo $kat['nm_kategori'];?></option>"

                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keterangan Barang</label>
                  <div class="col-sm-10">
                    <textarea id="editor1" name="keterangan"><?php echo $data_proc['keterangan'];?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Harga Barang</label>
                  <div class="col-sm-10 ">
                    <input type="text" name="harga_barang" class="form-control" placeholder="Harga Barang" value="<?php echo $data_proc['harga_barang'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diskon Barang</label>
                  <div class="col-sm-10">
                    <input type="text" name="disc_barang" class="form-control" placeholder="Diskon Barang" value="<?php echo $data_proc['disc_barang'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Gambar Lama</label>
                  <div class="col-sm-2">
                    <img class="img-responsive" src="../admin/upload/barang/<?php echo $data_proc['file_gambar']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Gambar Baru</label>
                  <div class="col-sm-10">
                    <input type="file" name="file_gambar">
                    <p class="help-block">file maksimal 1 mb.</p>
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