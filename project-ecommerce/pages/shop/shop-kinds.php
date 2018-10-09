<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(asset/images/heading-pages-02.jpeg);">
	<h2 class="l-text2 t-center">
		Shop
	</h2>
	<p class="m-text13 t-center">
		New Arrivals Collection 2018
	</p>
</section>

<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
				<div class="leftbar p-r-20 p-r-0-sm">
					<!--  -->
					<h4 class="m-text14 p-b-7">Jenis Barang</h4>

					<ul class="p-b-54">
					<?php
						$query=mysql_query("SELECT * FROM jenis");
						while ($val=mysql_fetch_array($query)){
					?>
						<li class="p-t-4"><a href="shopbykinds.php?kd_jenis=<?php echo $val['kd_jenis']; ?>" class="s-text13"><?php echo $val['nm_jenis'];?></a></li>
					<?php } ?>
					</ul>
					<div class="search-product pos-relative bo4 of-hidden">
						<form action="index.php?pages=search-product" method="post" name="search">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4" type="submit" name="btnCari" value=" Cari ">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
				<!-- Product -->
				<div class="row">
				<?php
					$get_id	  =$_GET['kd_jenis'];
					$sql_proc = mysql_query("SELECT * FROM jenis INNER JOIN kategori ON jenis.kd_jenis = kategori.kd_jenis INNER JOIN barang ON kategori.kd_kategori = barang.kd_kategori WHERE jenis.kd_jenis=$get_id ORDER BY kd_barang ASC");
					
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
				<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
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
				</div>
			</div>
		</div>
	</div>
</section>