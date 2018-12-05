<?php
  $query_stock = mysql_query("SELECT stock.kd_invent, barang.nm_barang, bahan.nm_bahan, ukuran.nm_ukuran, stock.jumlah_stok FROM stock JOIN barang ON stock.kd_barang = barang.kd_barang JOIN bahan ON stock.kd_bahan = bahan.kd_bahan JOIN ukuran ON stock.kd_ukuran = ukuran.kd_ukuran GROUP BY stock.kd_invent");
?>

<section class="content-header">
      <h1>
        Persediaan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-cubes"></i> Persediaan</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Persediaan</h3>
              <a href="<?php echo "$admin_url";?>adminweb.php?module=stock-new"><button type="button" class="btn btn-info pull-right"><i class="fa fa-plus"> Tambah</i></button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Barang</th>
                  <th>Jenis Bahan</th>
                  <th>Ukuran</th>
                  <th>Jumlah Stock</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $nomor  = 0; 
                  while ($kat =mysql_fetch_array($query_stock) ) {
                  $nomor++;
                ?>
                <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $kat['nm_barang']; ?></td>
                  <td><?php echo $kat['nm_bahan']; ?></td>
                  <td><?php echo $kat['nm_ukuran']; ?></td>
                  <td><?php echo $kat['jumlah_stok']; ?> buah</td>
                  <td>
                    <div class="btn_group">
                      <a href="<?php echo "$admin_url";?>adminweb.php?module=stock-edit&kd_invent=<?php echo $kat['kd_invent']; ?>"><button type="button" class="btn btn-info">Edit</button></a>

                      <a href="<?php echo "$admin_url";?>module/stock/stock-delete.php?kd_invent=<?php echo $kat['kd_invent']; ?>" onClick="return confirm ('Anda yakin ingin menghapus ini?')"><button type="button" class="btn btn-danger">Delete</button></a>
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