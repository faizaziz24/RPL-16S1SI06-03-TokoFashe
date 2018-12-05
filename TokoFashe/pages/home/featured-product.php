<?php
	$sql_proc = mysql_query("SELECT * FROM barang ORDER BY kd_barang DESC LIMIT 6");
	
	while ($r=mysql_fetch_array($sql_proc)){
		
	$disc   	= ($r['disc_barang']/100)*$r['harga_barang'];
	$disc_cost	= $r['harga_barang'] - $disc;

	$d 		=$r['disc_barang'];

	$hargatetap	= "<span class='block2-price m-text6 p-r-5'>Rp. $r[harga_barang],-</span>";
	$hargadiskon= "<span class='block2-oldprice m-text7 p-r-5'>Rp. $r[harga_barang],-</span>
				   <span class='block2-newprice m-text8 p-r-5'>Rp. $disc_cost,-</span>";

	if ($d!= "0"){
      $divharga=$hargadiskon;
    }else{
      $divharga=$hargatetap;
    } 
?>
<div class="item-slick2 p-l-15 p-r-15">
	<!-- Block2 -->
	<div class="block2">
		<div class="block2-img wrap-pic-w of-hidden pos-relative">
			<img  src="admin/upload/barang/<?php echo $r['file_gambar']; ?>" alt="IMG-PRODUCT">
		</div>
		<div class="block2-txt p-t-20">
			<a href="index.php?pages=product-detail&kd_barang=<?php echo $r['kd_barang']; ?>" class="block2-name dis-block s-text3 p-b-5"><?php echo $r['nm_barang']; ?></a>
			<?php echo $divharga;?>
		</div>
	</div>
</div>
<?php } ?>