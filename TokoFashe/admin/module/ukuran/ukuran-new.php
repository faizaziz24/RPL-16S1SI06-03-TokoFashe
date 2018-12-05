<section class="content-header">
      <h1>
        Ukuran
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=size"><i class="fa fa-sliders"></i> Ukuran</a></li>
        <li class="active"><i class="fa fa-plus"></i> Ukuran Baru</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ukuran Baru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../admin/module/ukuran/ukuran-new-aksi.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Ukuran Sepatu</label>
                  <div class="col-sm-9">
                    <input type="text" name="nm_ukuran" class="form-control" placeholder="Ukuran Sepatu">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Jenis Usia</label>
                  <div class="col-sm-9">
                    <input type="text" name="usia_ukuran" class="form-control" placeholder="Jenis Usia">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Biaya Buat</label>
                  <div class="col-sm-9 ">
                    <input type="text" name="biaya_buat" class="form-control" placeholder="Biaya Buat">
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