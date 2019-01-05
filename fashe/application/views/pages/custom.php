<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?php echo base_url(); ?>assets/images/heading-pages-06.jpeg);">
	<h2 class="l-text2 t-center">Order Custom</h2>
</section>

<!-- Product Detail -->
<div class="container bgwhite p-t-35 p-b-80">
	<div class="flex-w flex-sb">
		
		<!-- Product Detail -->
		<div class="container bgwhite p-t-35 p-b-80">

			<?php echo form_open('pages/create'); ?>
			<div class="flex-w flex-sb">
				
				<div class="w-size14 p-t-30 respon5">
					<h4 class="product-detail-name m-text16 p-b-13">
						Order Custom :
					</h4>

					<!--  -->
					<div class="p-t-33 p-b-60">

						<!--  -->
						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size30 m-b-20">
							<select class="selection-1" name="cmbUkuran" id="cmbUkuran">
								<option value="">Pilih Kategori</option>
								<?php foreach ($categories as $category) : ?>
								<option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>

						<!--  -->
						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size30 m-b-20">
							<select class="selection-1" name="cmbUkuran" id="cmbUkuran">
								<option value="">Pilih Bahan</option>
								<?php foreach ($materials as $material) : ?>
								<option value="<?php echo $material['material_id']; ?>"><?php echo $material['material_name']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>

						<!--  -->
						<div class="bo1 w-full-sm m-b-20">
							<input class="s-text7 p-l-22 p-r-22" type="file" name="nm_gambar">
						</div>

						<!--  -->
						<div class="size6 bo4 m-b-22">
							<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="Address" placeholder="Address"></textarea>
						</div>
					</div>
				</div>

				<div class="w-size14 p-t-30 respon5">
					<h4 class="product-detail-name m-text16 p-b-13">
						Shipping :
					</h4>

					<!--  -->
					<div class="p-t-33 p-b-60">
						<div class="size6 bo4 m-b-12">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="province" placeholder="province">
						</div>

						<div class="size6 bo4 m-b-12">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="city" placeholder="City">
						</div>

						<div class="size6 bo4 m-b-22">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="Postcode / Zip">
						</div>
						<div class="size6 bo4 m-b-22">
							<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="Address" placeholder="Address"></textarea>
						</div>
					</div>

					<div class="p-b-45">
						<div class="size15 trans-0-4">
							<!-- Button -->
							<button type="submit" value="Submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
								Proceed to Checkout
							</button>
						</div>
					</div>
				</div>
				
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>

