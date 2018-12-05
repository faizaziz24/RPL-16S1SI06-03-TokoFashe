<?php
if(empty($_SESSION['SES_PELANGGAN'])) {
	echo "<script>
            alert('Anda belum melakukan login customer! Silahkan klik OK Untuk melakukan registrasi!'); 
            window.location = 'index.php?pages=register';
          </script>";
	exit;
}
?>