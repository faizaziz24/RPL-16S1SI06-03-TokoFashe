<?php
	include "../library/koneksi.php";

	$username	=	$_POST['username'];
	$password	= 	$_POST['password'];

	if (!ctype_alnum($username) OR !ctype_alnum($password)) {
		echo "<script>
                alert('LOGIN GAGAL! Username atau Password Anda tidak benar atau Account Anda sedang diblokir.'); 
                window.location = 'index.php';
              </script>";
	}else{
		$login = mysql_query("SELECT * FROM admin WHERE username='".$username."' AND password ='".md5($password)."'");
		$ketemu = mysql_num_rows($login);
		$r 		= mysql_fetch_array($login);

		if ($ketemu > 0) {
			session_start();

			$_SESSION[id_admin] = $r[id];
			$_SESSION[nameuser] = $r[username];
			$_SESSION[passuser] = $r[password];
			$_SESSION[nm_admin] = $r[nm_admin];

			header('location:adminweb.php?module=dashboard');
		}else{
			echo "<script>
                alert('LOGIN GAGAL! Username atau Password Anda tidak benar atau Account Anda sedang diblokir.'); 
                window.location = 'index.php';
              </script>";
		}
	}
?>