<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>
				<div>
					<p class="s-text7 w-size27">Any questions? Let us know in store at 1th floor Fashe, Klitren, Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta (DIY) or call us on (+62821) 3654 9690</p>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">Jenis</h4>
				<ul>
					<?php
						$query=mysql_query("SELECT * FROM jenis");
						while ($val=mysql_fetch_array($query)){
					?>
					<li class="p-b-9"><a href="shopbykinds.php?kd_jenis=<?php echo $val['kd_jenis']; ?>" class="s-text7"><?php echo $val['nm_jenis'];?></a></li>
					<?php } ?>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">Links</h4>
				<ul>
					<li class="p-b-9"><a href="index.php?pages=shop" class="s-text7">Search</a></li>
					<li class="p-b-9"><a href="index.php?pages=about" class="s-text7">About Us</a></li>
					<li class="p-b-9"><a href="index.php?pages=contact" class="s-text7">Contact Us</a></li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">Help</h4>
				<ul>
					<li class="p-b-9"><a href="#" class="s-text7">Track Order</a></li>
					<li class="p-b-9"><a href="#" class="s-text7">Shipping</a></li>
					<li class="p-b-9"><a href="#" class="s-text7">FAQs</a></li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Stay Connected
				</h4>
				<div>
					<p class="s-text7 w-size27">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
				</div>

			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<div class="t-center s-text8 p-t-20">
				Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by faiz_aziz24
			</div>
		</div>
	</footer>

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	<script type="text/javascript" src="asset/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="asset/vendor/animsition/js/animsition.min.js"></script>
	<script type="text/javascript" src="asset/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="asset/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="asset/vendor/select2/select2.min.js"></script>

	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>

	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>

	<script type="text/javascript" src="asset/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="asset/js/slick-custom.js"></script>
	<script type="text/javascript" src="asset/vendor/countdowntime/countdowntime.js"></script>
	<script type="text/javascript" src="asset/vendor/lightbox2/js/lightbox.min.js"></script>
	<script type="text/javascript" src="asset/vendor/sweetalert/sweetalert.min.js"></script>

	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

	
	
	<script type="text/javascript">
		$(document).ready(function(){
			$('#cmbBahan').on('change', function(){
				var bahanID = $(this).val();
				if (bahanID) {
					$.ajax({
						type 	: 'POST',
						url  	: 'pages/shop/ajaxData.php',
						data 	: 'kd_bahan='+bahanID,
						dataType: 'html',
						success	: function(response){
							$('#cmbSize').html(response);
						}
					});
				}else{
					$('#cmbSize').html('<option value="">Pilih Bahan Terlebih Dahulu</option>');
				}
			});



			$('#cmbProvinsi').on('change', function(){
				var provID = $(this).val();
				if (provID) {
					$.ajax({
						type 	: 'POST',
						url  	: 'pages/shop/ajaxData.php',
						data 	: 'kd_provinsi='+provID,
						dataType: 'html',
						success	: function(response){
							$('#cmbKota').html(response);
						}
					});
				}else{
					$('#cmbKota').html('<option value="">Pilih Provinsi Terlebih Dahulu</option>');
				}
			});
		});
	</script>

	<script src="asset/js/main.js"></script>
</body>
</html>