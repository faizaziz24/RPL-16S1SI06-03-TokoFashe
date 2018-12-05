<?php
  $query_kat = mysql_query("SELECT * FROM kategori INNER JOIN jenis ON kategori.kd_jenis = jenis.kd_jenis");
?>

<section class="content-header">
      <h1>
        Kategori
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-th"></i> Kategori</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kategori</h3>
              <a href="<?php echo "$admin_url";?>adminweb.php?module=categories-new"><button type="button" class="btn btn-info pull-right"><i class="fa fa-plus"> Tambah</i></button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Kategori</th>
                  <th>Jenis</th>
                  <th>Inisial Kategori</th>
                  <th>Gambar</th>
                  <th>Biaya</th>
                  <th>Diskon</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $nomor = 0;
                  while ($kat =mysql_fetch_array($query_kat) ) {
                  $nomor++;
                ?>
                <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $kat['nm_kategori']; ?></td>
                  <td><?php echo $kat['nm_jenis']; ?></td>
                  <td><?php echo $kat['inisial_kategori']; ?></td>
                  <td class="col-sm-1"><img class="img-responsive" src="../admin/upload/kategori/<?php echo $kat['gb_kategori']; ?>"></td>
                  <td><?php echo $kat['biaya_buat']; ?></td>
                  <td><?php echo $kat['disc_kategori']; ?></td>
                  <td>
                    <div class="btn_group">
                      <a href="<?php echo "$admin_url";?>adminweb.php?module=categories-edit&kd_kategori=<?php echo $kat['kd_kategori']; ?>"><button type="button" class="btn btn-info">Edit</button></a>

                      <a href="<?php echo "$admin_url";?>module/kategori/kategori-delete.php?kd_kategori=<?php echo $kat['kd_kategori']; ?>" onClick="return confirm ('Anda yakin ingin menghapus ini?')"><button type="button" class="btn btn-danger">Delete</button></a>
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