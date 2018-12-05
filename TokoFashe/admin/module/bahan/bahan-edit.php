<?php
    $kd_bahan      = $_GET['kd_bahan'];
    $query_bahan   = mysql_query("SELECT * FROM bahan WHERE kd_bahan='$kd_bahan'");
    $data_bahan    = mysql_fetch_array($query_bahan);
?>

<section class="content-header">
      <h1>
        Bahan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=material"><i class="fa fa-clone"></i> Bahan</a></li>
        <li class="active"><i class="fa fa-edit"></i> Bahan Settings</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Bahan Settings</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../admin/module/bahan/bahan-edit-aksi.php" method="post">
              <div class="box-body">
                <input type="hidden" name="kd_bahan" class="form-control" value="<?php echo $data_bahan['kd_bahan'];?>">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Bahan</label>
                  <div class="col-sm-9">
                    <input type="text" name="nm_bahan" class="form-control" value="<?php echo $data_bahan['nm_bahan'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Karakteristik</label>
                  <div class="col-sm-9">
                    <textarea name="pj_bahan" class="col-md-12 col-xs-12" style=" height: 200px"><?php echo $data_bahan['pj_bahan'];?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Biaya Buat</label>
                  <div class="col-sm-9 ">
                    <input type="text" name="biaya_buat" class="form-control" value="<?php echo $data_bahan['biaya_buat'];?>">
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