<?php
if(empty($_SESSION['nameuser']) and empty($_SESSION['passuser'])) {
	echo "<script>
                alert('Maaf Akses Anda Ditolak!'); 
          </script>";
    include_once "../admin/index.php";
	exit;
}
?>