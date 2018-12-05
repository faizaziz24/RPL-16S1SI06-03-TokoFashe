<?php
    $query_admin  = mysql_query("SELECT * FROM admin WHERE id = '$_SESSION[id_admin]'");
    $data_admin   = mysql_fetch_array($query_admin);
?>

<section class="content-header">
      <h1>
        Admin
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-cogs"></i> Settings Nama</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Nama Settings</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="<?php $_SERVER['PHP_SELF']; ?>" action="" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Lama</label>
                  <input type="text" class="form-control" disabled="disabled" value="<?php echo $data_admin['nm_admin'];?>" ">
                </div>
                <div class="form-group">
                  <label>Nama Baru</label>
                  <input name="NamaUserBaru" type="text" class="form-control" placeholder="Nama Baru ...">
                </div>
                <?php

                if(isset($_POST['btnSimpan'])){

                  # MEMBACA FORM
                  $NamaUserBaru= $_POST['NamaUserBaru'];

                  $pesanError = array();
                  if (trim($NamaUserBaru)=="") {
                    $pesanError[] = "Data <b> Nama baru </b> belum diisi !";    
                  }

                  $queryCek = mysql_query("SELECT * FROM admin WHERE nm_admin='$data_admin[nm_admin]'");
                  
                  if(mysql_num_rows($queryCek) <1){
                    $pesanError[] = "Maaf, <b> Nama Anda Salah</b>....silahkan ulangi";
                  }

                  # JIKA ADA PESAN ERROR DARI VALIDASI
                  if (count($pesanError)>=1 ){
                      $noPesan=0;
                      foreach ($pesanError as $indeks=>$pesan_tampil) { 
                      $noPesan++;
                        echo "&nbsp;&nbsp; $noPesan. $pesan_tampil<br>";  
                      }
                  }else {
                    $myQry  = mysql_query("UPDATE admin SET nm_admin=('$NamaUserBaru') WHERE id='$_SESSION[id_admin]'");

                    if($myQry){
                        echo "<script>
                              alert('Nama Berhasil Diganti'); 
                              window.location = '$admin_url'+'adminweb.php?module=admin';
                            </script>";
                    }
                  }
                }
              ?>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="btnSimpan" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->