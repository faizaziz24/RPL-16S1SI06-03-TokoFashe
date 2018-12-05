<?php

	$server		= "localhost";
	$username	= "root";
	$password	= "";
	$database	= "project-ecommerce";

	mysql_connect($server, $username, $password, $database) or die ("Koneksi GAGAL");
	mysql_select_db($database) or die ("DATABASE tidak dapat digunakan");

?>