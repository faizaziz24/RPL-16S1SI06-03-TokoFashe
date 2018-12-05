<?php
    $kd_jenis    = $_GET['kd_jenis'];
    $query_jenis = mysql_query("SELECT * FROM jenis WHERE kd_jenis='$kd_jenis'");
    $data_jenis  = mysql_fetch_array($query_jenis);
?>

<section class="content-header">
      <h1>
        Jenis
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=categories"><i class="fa fa-clone"></i> Jenis</a></li>
        <li class="active"><i class="fa fa-edit"></i> Jenis Settings</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Jenis Settings</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../admin/module/jenis/jenis-edit-aksi.php" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <input type="hidden" name="kd_jenis" class="form-control" value="<?php echo $data_jenis['kd_jenis'];?>">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Jenis</label>
                  <div class="col-sm-10">
                    <input type="text" name="nm_jenis" class="form-control" value="<?php echo $data_jenis['nm_jenis'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Penjelasan</label>
                  <div class="col-sm-10">
                    <textarea id="editor1" name="pj_jenis"><?php echo $data_jenis['pj_jenis'];?></textarea>
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