<?php
    $kd_pesan     = $_GET['kd_pesan'];
    $query_pesan  = mysql_query("SELECT * FROM pesan WHERE kd_pesan='$kd_pesan'");
    $data_pesan   = mysql_fetch_array($query_pesan);
?>

<section class="content-header">
      <h1>
        Pesan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminweb.php?module=pesan-data"><i class="fa fa-envelope"></i> Pesan</a></li>
        <li class="active"><i class="fa fa-edit"></i> Pesan Settings</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pesan Settings</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <input type="hidden" name="kd_pesan" class="form-control" value="<?php echo $data_waktu['kd_pesan'];?>">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Pengirim</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" value="<?php echo $data_pesan['nm_pesan'];?>" disabled="disabled">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nomor Telepon</label>
                  <div class="col-sm-9 ">
                    <input type="text" class="form-control" value="<?php echo $data_pesan['no_telepon'];?>" disabled="disabled">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Email Pengirim</label>
                  <div class="col-sm-9 ">
                    <input type="text" class="form-control" value="<?php echo $data_pesan['email'];?>" disabled="disabled">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Keterangan Barang</label>
                  <div class="col-sm-9">
                    <textarea disabled="disabled" id="editor1"><?php echo $data_pesan['isi_pesan'];?></textarea>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->