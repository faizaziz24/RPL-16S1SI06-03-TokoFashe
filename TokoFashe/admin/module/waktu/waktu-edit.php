<?php
    $kd_waktu     = $_GET['kd_waktu'];
    $query_waktu  = mysql_query("SELECT * FROM waktu WHERE kd_waktu='$kd_waktu'");
    $data_waktu   = mysql_fetch_array($query_waktu);
?>

<section class="content-header">
      <h1>
        Waktu
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=time"><i class="fa fa-clock-o"></i> Waktu</a></li>
        <li class="active"><i class="fa fa-edit"></i> Waktu Settings</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Waktu Settings</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../admin/module/waktu/waktu-edit-aksi.php" method="post">
              <div class="box-body">
                <input type="hidden" name="kd_waktu" class="form-control" value="<?php echo $data_waktu['kd_waktu'];?>">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Lama Buat</label>
                  <div class="col-sm-9">
                    <input type="text" name="lama_waktu" class="form-control" value="<?php echo $data_waktu['lama_waktu'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Biaya Buat</label>
                  <div class="col-sm-9 ">
                    <input type="text" name="biaya_buat" class="form-control" value="<?php echo $data_waktu['biaya_buat'];?>">
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