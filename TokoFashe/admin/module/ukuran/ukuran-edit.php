<?php
    $kd_ukuran     = $_GET['kd_ukuran'];
    $query_ukuran  = mysql_query("SELECT * FROM ukuran WHERE kd_ukuran='$kd_ukuran'");
    $data_ukuran   = mysql_fetch_array($query_ukuran);
?>

<section class="content-header">
      <h1>
        Ukuran
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=size"><i class="fa fa-sliders"></i> Ukuran</a></li>
        <li class="active"><i class="fa fa-edit"></i> Ukuran Settings</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ukuran Settings</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../admin/module/ukuran/ukuran-edit-aksi.php" method="post">
              <div class="box-body">
                <input type="hidden" name="kd_ukuran" class="form-control" value="<?php echo $data_ukuran['kd_ukuran'];?>">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Ukuran Sepatu</label>
                  <div class="col-sm-9">
                    <input type="text" name="nm_ukuran" class="form-control" value="<?php echo $data_ukuran['nm_ukuran'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Jenis Usia</label>
                  <div class="col-sm-9">
                    <input type="text" name="usia_ukuran" class="form-control" value="<?php echo $data_ukuran['usia_ukuran'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Biaya Buat</label>
                  <div class="col-sm-9 ">
                    <input type="text" name="biaya_buat" class="form-control" value="<?php echo $data_ukuran['biaya_buat'];?>">
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