<?php
  $dataKategori = isset($_POST['cmbKategori']) ? $_POST['cmbKategori'] : '';
?>
<section class="content-header">
      <h1>
        Barang
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=product"><i class="fa fa-cube"></i> Barang</a></li>
        <li class="active"><i class="fa fa-plus"></i> Barang Baru</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Barang Baru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../admin/module/barang/barang-new-aksi.php" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Barang</label>
                  <div class="col-sm-10">
                    <input type="text" name="nm_barang" class="form-control" placeholder="Nama Barang">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kategori Barang</label>
                  <div class="col-sm-10">
                    <select name="cmbKategori" class="form-control">
                        <?php
                          $query_kat = mysql_query("SELECT * FROM kategori ORDER BY kd_kategori");
                          while ($kat = mysql_fetch_array($query_kat)) {
                          if ($kat['kd_kategori']== $dataKategori) {
                            $cek = " selected";
                          } else { $cek=""; }
                          echo "<option value='$kat[kd_kategori]' $cek>$kat[nm_kategori] </option>";
                          }
                        ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keterangan Barang</label>
                  <div class="col-sm-10">
                    <textarea id="editor1" name="keterangan"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Harga Barang</label>
                  <div class="col-sm-10 ">
                    <input type="text" name="harga_barang" class="form-control" placeholder="Harga Barang">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Diskon Barang</label>
                  <div class="col-sm-10">
                    <input type="text" name="disc_barang" class="form-control" placeholder="Diskon Barang">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Gambar Barang</label>
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