<?php
    $kd_provinsi  = $_GET['kd_provinsi'];
    $query_prov   = mysql_query("SELECT * FROM provinsi WHERE kd_provinsi='$kd_provinsi'");
    $data_prov    = mysql_fetch_array($query_prov);
?>

<section class="content-header">
      <h1>
        Provinsi
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=province"><i class="fa fa-hospital-o"></i> Provinsi</a></li>
        <li class="active"><i class="fa fa-edit"></i> Provinsi Settings</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Provinsi Settings</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../admin/module/ongkir/provinsi-edit-aksi.php" method="post">
              <div class="box-body">
                <input type="hidden" name="kd_provinsi" class="form-control" value="<?php echo $data_prov['kd_provinsi'];?>">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Provinsi</label>
                  <div class="col-sm-9">
                    <input type="text" name="nm_provinsi" class="form-control" placeholder="Provinsi" value="<?php echo $data_prov['nm_provinsi'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Ibu Kota</label>
                  <div class="col-sm-9">
                    <input type="text" name="nm_ibukota" class="form-control" placeholder="Ibu Kota" value="<?php echo $data_prov['nm_ibukota'];?>">
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