<?php
  $query_proc = mysql_query("SELECT * FROM barang");
?>

<section class="content-header">
      <h1>
        Barang
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-cube"></i> Barang</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Barang</h3>
              <a href="<?php echo "$admin_url";?>adminweb.php?module=product-new"><button type="button" class="btn btn-info pull-right"><i class="fa fa-plus"> Tambah</i></button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Barang</th>
                  <th>Gambar</th>
                  <th>Harga</th>
                  <th>Diskon</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $nomor  = 0; 
                  while ($kat =mysql_fetch_array($query_proc) ) {
                  $nomor++;
                ?>
                <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $kat['nm_barang']; ?></td>
                  <td class="col-sm-1"><img class="img-responsive" src="../admin/upload/barang/<?php echo $kat['file_gambar']; ?>"></td>
                  <td>Rp. <?php echo $kat['harga_barang']; ?></td>
                  <td><?php echo $kat['disc_barang']; ?> %</td>
                  <td>
                    <div class="btn_group">
                      <a href="<?php echo "$admin_url";?>adminweb.php?module=product-edit&kd_barang=<?php echo $kat['kd_barang']; ?>"><button type="button" class="btn btn-info">Edit</button></a>

                      <a href="<?php echo "$admin_url";?>module/waktu/barang-delete.php?kd_barang=<?php echo $kat['kd_barang']; ?>" onClick="return confirm ('Anda yakin ingin menghapus ini?')"><button type="button" class="btn btn-danger">Delete</button></a>
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