<?php
  $query_sell = mysql_query("SELECT * FROM pembelian");
?>

<section class="content-header">
      <h1>
        Pembelian
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-user"></i> Pembelian</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pembelian</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Pelanggan</th>
                  <th>Tanggal Pembelian</th>
                  <th>Status</th>
                  <th>View</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $nomor  = 0; 
                  while ($kat =mysql_fetch_array($query_sell) ) {
                  $nomor++;
                ?>
                <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $kat['nm_pelanggan']; ?></td>
                  <td><?php echo $kat['tgl_pembelian']; ?></td>
                  <td><?php echo $kat['status_bayar']; ?></td>
                  <td>
                    <div class="btn_group">
                      <a href="<?php echo "$admin_url";?>adminweb.php?module=sell-edit&kd_pembelian=<?php echo $kat['kd_pembelian']; ?>"><button type="button" class="btn btn-info">Edit</button></a>

                      <a href="<?php echo "$admin_url";?>adminweb.php?module=sell-view&kd_pembelian=<?php echo $kat['kd_pembelian']; ?>"><button type="button" class="btn btn-success">View</button></a>

                      <a href="<?php echo "$admin_url";?>module/waktu/waktu-delete.php?kd_waktu=<?php echo $kat['kd_waktu']; ?>" onClick="return confirm ('Anda yakin ingin menghapus ini?')"><button type="button" class="btn btn-danger">Delete</button></a>
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