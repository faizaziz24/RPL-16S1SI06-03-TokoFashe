<?php
    $kd_kategori    = $_GET['kd_kategori'];
    $query_kategori = mysql_query("SELECT * FROM kategori JOIN jenis ON kategori.kd_jenis = jenis.kd_jenis WHERE kd_kategori='$kd_kategori'");
    $data_kategori  = mysql_fetch_array($query_kategori);
?>

<section class="content-header">
      <h1>
        Kategori
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=categories"><i class="fa fa-th"></i> Kategori</a></li>
        <li class="active"><i class="fa fa-edit"></i> Kategori Settings</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Kategori Settings</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../admin/module/kategori/kategori-edit-aksi.php" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <input type="hidden" name="kd_kategori" class="form-control" value="<?php echo $data_kategori['kd_kategori'];?>">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Kategori</label>
                  <div class="col-sm-10">
                    <input type="text" name="nm_kategori" class="form-control" value="<?php echo $data_kategori['nm_kategori'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis</label>
                  <div class="col-sm-10">
                    <select name="cmbJenis" class="form-control">
                      <?php
                        $query = mysql_query("SELECT * FROM jenis ORDER BY kd_jenis");
                        while ($kat = mysql_fetch_array($query)) {?>

                        <option value="<?php echo $kat['kd_jenis'];?>"<?php if($kat['kd_jenis']==$data_kategori['kd_jenis']):?> selected="selected" <?php endif; ?>><?php echo $kat['nm_jenis'];?></option>"

                        <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Inisial Kategori</label>
                  <div class="col-sm-10">
                    <input type="text" name="inisial_kategori" class="form-control" value="<?php echo $data_kategori['inisial_kategori'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Penjelasan</label>
                  <div class="col-sm-10">
                    <textarea id="editor1" name="pj_kategori"><?php echo $data_kategori['pj_kategori'];?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Biaya Buat</label>
                  <div class="col-sm-10">
                    <input type="text" name="biaya_buat" class="form-control" value="<?php echo $data_kategori['biaya_buat'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diskon</label>
                  <div class="col-sm-10">
                    <input type="text" name="disc_kategori" class="form-control" value="<?php echo $data_kategori['disc_kategori'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Gambar Lama</label>
                  <div class="col-sm-2">
                    <img class="img-responsive" src="../admin/upload/kategori/<?php echo $data_kategori['gb_kategori']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Gambar Ganti</label>
                  <div class="col-sm-10">
                    <input type="file" name="gb_kategori" >
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