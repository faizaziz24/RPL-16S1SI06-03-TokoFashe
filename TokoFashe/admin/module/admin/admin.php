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
        <li class="active"><i class="fa fa-cogs"></i> Settings Password</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Password Settings</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="<?php $_SERVER['PHP_SELF']; ?>" action="" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Username</label>
                  <input name="txtUsername" type="text" class="form-control" disabled="disabled" value="<?php echo $data_admin['username'];?>">
                </div>
                <div class="form-group">
                  <label>Password Lama</label>
                  <input name="txtPassLama" type="password" class="form-control" placeholder="Password Lama">
                </div>
                <div class="form-group">
                  <label>Password Baru</label>
                  <input name="txtPassBaru" type="password" class="form-control" placeholder="Password Baru">
                </div>
                <?php

                if(isset($_POST['btnSimpan'])){

                  # MEMBACA FORM
                  $txtPassBaru= $_POST['txtPassBaru'];
                  $txtPassLama= $_POST['txtPassLama'];

                  $pesanError = array();
                  if (trim($txtPassBaru)=="") {
                    $pesanError[] = "Data <b> Password baru </b> belum diisi !";    
                  }

                  $queryCek = mysql_query("SELECT * FROM admin WHERE username='$_SESSION[nameuser]' AND password ='".md5($txtPassLama)."'");
                  
                  if(mysql_num_rows($queryCek) <1){
                    $pesanError[] = "Maaf, <b> Password Anda Salah</b>....silahkan ulangi";
                  }

                  # JIKA ADA PESAN ERROR DARI VALIDASI
                  if (count($pesanError)>=1 ){
                      $noPesan=0;
                      foreach ($pesanError as $indeks=>$pesan_tampil) { 
                      $noPesan++;
                        echo "&nbsp;&nbsp; $noPesan. $pesan_tampil<br>";  
                      }
                  }else {
                    $myQry  = mysql_query("UPDATE admin SET password=md5('$txtPassBaru') WHERE id='$_SESSION[id_admin]'");

                    if($myQry){
                        echo "<script>
                              alert('Password Berhasil Diganti'); 
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