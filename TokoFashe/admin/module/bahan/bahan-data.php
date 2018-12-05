<?php
  $query_material = mysql_query("SELECT * FROM bahan");
?>

<section class="content-header">
      <h1>
        Bahan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-clone"></i> Bahan</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Bahan</h3>
              <a href="<?php echo "$admin_url";?>adminweb.php?module=material-new"><button type="button" class="btn btn-info pull-right"><i class="fa fa-plus"> Tambah</i></button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Bahan</th>
                  <th>Karakteristik</th>
                  <th>Biaya Pembuatan</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $nomor  = 0; 
                  while ($kat =mysql_fetch_array($query_material) ) {
                  $nomor++;
                ?>
                <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $kat['nm_bahan']; ?></td>
                  <td><?php echo $kat['pj_bahan']; ?></td>
                  <td><?php echo $kat['biaya_buat']; ?></td>
                  <td>
                    <div class="btn_group">
                      <a href="<?php echo "$admin_url";?>adminweb.php?module=material-edit&kd_bahan=<?php echo $kat['kd_bahan']; ?>"><button type="button" class="btn btn-info">Edit</button></a>

                      <a href="<?php echo "$admin_url";?>module/bahan/bahan-delete.php?kd_bahan=<?php echo $kat['kd_bahan']; ?>" onClick="return confirm ('Anda yakin ingin menghapus ini?')"><button type="button" class="btn btn-danger">Delete</button></a>
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