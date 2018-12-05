<?php
  $query_mes = mysql_query("SELECT * FROM pesan");
?>

<section class="content-header">
      <h1>
        Pesan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-envelope"></i> Pesan</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pesan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Lengkap</th>
                  <th>Nomor Telepon</th>
                  <th>Email</th>
                  <th>Isi Pesan</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $nomor  = 0; 
                  while ($kat =mysql_fetch_array($query_mes) ) {
                  $nomor++;
                ?>
                <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $kat['nm_pesan']; ?></td>
                  <td><?php echo $kat['no_telepon']; ?></td>
                  <td><?php echo $kat['email']; ?></td>
                  <td><?php echo $kat['isi_pesan']; ?></td>
                  <td>
                    <div class="btn_group">
                      <a href="<?php echo "$admin_url";?>adminweb.php?module=pesan-read&kd_pesan=<?php echo $kat['kd_pesan']; ?>"><button type="button" class="btn btn-info">Read</button></a>

                      <a href="<?php echo "$admin_url";?>module/pesan/pesan-delete.php?kd_pesan=<?php echo $kat['kd_pesan']; ?>" onClick="return confirm ('Anda yakin ingin menghapus ini?')"><button type="button" class="btn btn-danger">Delete</button></a>
                    </div>
                  </td>
                </tr>
                <?php
                  }
                ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </section>