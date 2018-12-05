<section class="content-header">
      <h1>
        Bahan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=material"><i class="fa fa-clone"></i> Bahan</a></li>
        <li class="active"><i class="fa fa-plus"></i> Bahan Baru</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Bahan Baru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../admin/module/bahan/bahan-new-aksi.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Bahan</label>
                  <div class="col-sm-9">
                    <input type="text" name="nm_bahan" class="form-control" placeholder="Nama Bahan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Karakteristik</label>
                  <div class="col-sm-9">
                    <textarea name="pj_bahan" class="col-md-12 col-xs-12" style=" height: 200px"></textarea>
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