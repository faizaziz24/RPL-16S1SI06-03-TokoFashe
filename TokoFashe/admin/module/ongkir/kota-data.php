<?php
  $query_city = mysql_query("SELECT kota.kd_kota, kota.nm_kota, provinsi.nm_provinsi, kota.biaya_kirim FROM kota JOIN provinsi ON kota.kd_provinsi = provinsi.kd_provinsi GROUP BY kota.kd_kota, kota.nm_kota");

?>

<section class="content-header">
      <h1>
        Kota
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-home"></i> Kota</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kota</h3>
              <a href="<?php echo "$admin_url";?>adminweb.php?module=city-new"><button type="button" class="btn btn-info pull-right"><i class="fa fa-plus"> Tambah</i></button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Kota</th>
                  <th>Provinsi</th>
                  <th>Biaya Pengiriman</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $nomor = 0;
                  while ($kat =mysql_fetch_array($query_city) ) {
                  $nomor++;
                ?>
                <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $kat['nm_kota']; ?></td>
                  <td><?php echo $kat['nm_provinsi']; ?></td>
                  <td><?php echo $kat['biaya_kirim']; ?></td>
                  <td>
                    <div class="btn_group">
                      <a href="<?php echo "$admin_url";?>adminweb.php?module=city-edit&kd_kota=<?php echo $kat['kd_kota']; ?>"><button type="button" class="btn btn-info">Edit</button></a>

                      <a href="<?php echo "$admin_url";?>module/ongkir/kota-delete.php?kd_kota=<?php echo $kat['kd_kota']; ?>" onClick="return confirm ('Anda yakin ingin menghapus ini?')"><button type="button" class="btn btn-danger">Delete</button></a>
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