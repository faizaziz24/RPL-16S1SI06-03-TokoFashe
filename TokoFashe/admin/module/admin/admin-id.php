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
        <li class="active"><i class="fa fa-cogs"></i> Settings Username</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Username Settings</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="<?php $_SERVER['PHP_SELF']; ?>" action="" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Username Lama</label>
                  <input name="txtUserLama" type="text" class="form-control" placeholder="Username Lama ...">
                </div>
                <div class="form-group">
                  <label>Username Baru</label>
                  <input name="txtUserBaru" type="text" class="form-control" placeholder="Username Baru ...">
                </div>
                <?php

                if(isset($_POST['btnSimpan'])){

                  # MEMBACA FORM

                  $txtUserBaru= $_POST['txtUserBaru'];
                  $txtUserLama= $_POST['txtUserLama'];

                  $pesanError = array();
                  if (trim($txtUserBaru)=="") {
                    $pesanError[] = "Data <b> Username baru </b> belum diisi !";    
                  }

                  $queryCek = mysql_query("SELECT * FROM admin WHERE username='".$txtUserLama."'");
                  
                  if(mysql_num_rows($queryCek) <1){
                    $pesanError[] = "Maaf, <b> Username Anda Salah</b>....silahkan ulangi";
                  }

                  # JIKA ADA PESAN ERROR DARI VALIDASI
                  if (count($pesanError)>=1 ){
                      $noPesan=0;
                      foreach ($pesanError as $indeks=>$pesan_tampil) { 
                      $noPesan++;
                        echo "&nbsp;&nbsp; $noPesan. $pesan_tampil<br>";  
                      }
                  }else {
                    $myQry  = mysql_query("UPDATE admin SET username=('$txtUserBaru') WHERE id='$_SESSION[id_admin]'");

                    if($myQry){
                        echo "<script>
                              alert('Username Berhasil Diganti'); 
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