<?php
  $dataJenis = isset($_POST['cmbJenis']) ? $_POST['cmbJenis'] : '';
?>
<section class="content-header">
      <h1>
        Kategori
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=categories"><i class="fa fa-th"></i> Kategori</a></li>
        <li class="active"><i class="fa fa-plus"></i> Kategori Baru</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Kategori Baru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../admin/module/kategori/kategori-new-aksi.php" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Kategori</label>
                  <div class="col-sm-10">
                    <input type="text" name="nm_kategori" class="form-control" placeholder="Nama Kategori">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis</label>
                  <div class="col-sm-10">
                    <select name="cmbJenis" class="form-control">
                      <?php
                        $query = mysql_query("SELECT * FROM jenis ORDER BY kd_jenis");
                        while ($kat = mysql_fetch_array($query)) {
                        if ($kat['kd_jenis']== $dataJenis) {
                          $cek = " selected";
                        } else { $cek=""; }
                        echo "<option value='$kat[kd_jenis]' $cek>$kat[nm_jenis] </option>";
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Inisial Kategori</label>
                  <div class="col-sm-10">
                    <input type="text" name="inisial_kategori" class="form-control" placeholder="Inisial Kategori">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Penjelasan</label>
                  <div class="col-sm-10">
                    <textarea id="editor1" name="pj_kategori" placeholder="Place some text here"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Biaya Buat</label>
                  <div class="col-sm-10">
                    <input type="text" name="biaya_buat" class="form-control" placeholder="Biaya Pembuatan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diskon</label>
                  <div class="col-sm-10">
                    <input type="text" name="disc_kategori" class="form-control" placeholder="Diskon Pembuatan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Gambar</label>
                  <div class="col-sm-10">
                    <input type="file" name="gb_kategori">
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