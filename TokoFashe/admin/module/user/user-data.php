<?php
  $query_user = mysql_query("SELECT * FROM pelanggan");
?>

<section class="content-header">
      <h1>
        Pelanggan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-user"></i> Pelanggan</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pelanggan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Lengkap</th>
                  <th>Username</th>
                  <th>Jenis Kelamin</th>
                  <th>No. Telepon</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $nomor = 0;
                  while ($kat =mysql_fetch_array($query_user) ) {
                  $nomor++;
                ?>
                <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $kat['nm_pelanggan']; ?></td>
                  <td><?php echo $kat['username']; ?></td>
                  <td><?php echo $kat['kelamin']; ?></td>
                  <td><?php echo $kat['no_telepon']; ?></td>
                  <td>
                    <div class="btn_group">
                      <a href="<?php echo "$admin_url";?>module/user/user-delete.php?kd_pelanggan=<?php echo $kat['kd_pelanggan']; ?>" onClick="return confirm ('Anda yakin ingin menghapus ini?')"><button type="button" class="btn btn-danger">Delete</button></a>
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