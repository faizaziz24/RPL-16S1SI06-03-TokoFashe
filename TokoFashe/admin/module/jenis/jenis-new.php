<section class="content-header">
  <h1>
    Jenis
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="adminweb.php?module=kinds"><i class="fa fa-clone"></i> Jenis</a></li>
    <li class="active"><i class="fa fa-plus"></i> Jenis Baru</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Jenis Baru</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="../admin/module/jenis/jenis-new-aksi.php" method="post" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Jenis</label>
              <div class="col-sm-10">
                <input type="text" name="nm_jenis" class="form-control" placeholder="Nama Jenis">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Penjelasan</label>
              <div class="col-sm-10">
                <textarea id="editor1" name="pj_jenis" placeholder="Place some text here"></textarea>
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