<?php
  $query_kinds = mysql_query("SELECT * FROM jenis");
?>

<section class="content-header">
  <h1>
    Jenis
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li class="active"><i class="fa fa-clone"></i> Jenis</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Jenis</h3>
          <a href="<?php echo "$admin_url";?>adminweb.php?module=kinds-new"><button type="button" class="btn btn-info pull-right"><i class="fa fa-plus"> Tambah</i></button></a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No.</th>
              <th>Nama Jenis</th>
              <th>Penjelasan</th>
              <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php
              $nomor  = 0; 
              while ($kat =mysql_fetch_array($query_kinds) ) {
              $nomor++;
            ?>
            <tr>
              <td><?php echo $nomor; ?></td>
              <td><?php echo $kat['nm_jenis']; ?></td>
              <td><?php echo $kat['pj_jenis']; ?></td>
              <td>
                <div class="btn_group">
                  <a href="<?php echo "$admin_url";?>adminweb.php?module=kinds-edit&kd_jenis=<?php echo $kat['kd_jenis']; ?>"><button type="button" class="btn btn-info">Edit</button></a>

                  <a href="<?php echo "$admin_url";?>module/jenis/jenis-delete.php?kd_jenis=<?php echo $kat['kd_jenis']; ?>" onClick="return confirm ('Anda yakin ingin menghapus ini?')"><button type="button" class="btn btn-danger">Delete</button></a>
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