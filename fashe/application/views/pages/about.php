
	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?php echo base_url(); ?>assets/images/heading-pages-06.jpeg);">
		<h2 class="l-text2 t-center">
			About
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="<?php echo base_url(); ?>assets/images/banner-14.jpeg" alt="IMG-ABOUT">
					</div>
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						Our story
					</h3>

					<p class="p-b-28">
						Phasellus egestas nisi nisi, lobortis ultricies risus semper nec. Vestibulum pharetra ac ante ut pellentesque. Curabitur fringilla dolor quis lorem accumsan, vitae molestie urna dapibus. Pellentesque porta est ac neque bibendum viverra. Vivamus lobortis magna ut interdum laoreet. Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula. Vivamus tristique vulputate ultricies. Sed vitae ultrices orci.
					</p>

					<div class="bo13 p-l-29 m-l-9 p-b-10">
						<p class="p-b-11">
							Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.
						</p>

						<span class="s-text7">
							- Steve Job’s
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Our Categories -->
	<section class="blog bgwhite p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Our Categories
				</h3>
			</div>

			<div class="row">
				<?php foreach ($categories as $category) : ?>
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="<?php echo base_url(); ?>assets/images/categories/<?php echo $category['category_image']; ?>" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									<?php echo $category['category_name']; ?>
								</a>
							</h4>

							<span class="s-text6">on</span> <span class="s-text7"><?php echo $category['created_at']; ?></span>

							<p class="s-text8 p-t-16">
								<?php echo word_limiter($category['category_body'], 30); ?>
							</p>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<!-- End Our Categories -->

	<!-- Our Materials -->
	<section class="blog bgwhite p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Our Materials
				</h3>
			</div>

			<div class="row">
				<?php foreach ($materials as $material) : ?>
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="<?php echo base_url(); ?>assets/images/materials/<?php echo $material['material_image']; ?>" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									<?php echo $material['material_name']; ?>
								</a>
							</h4>

							<span class="s-text6">on</span> <span class="s-text7"><?php echo $material['created_at']; ?></span>

							<p class="s-text8 p-t-16">
								<?php echo word_limiter($material['material_body'], 30); ?>
							</p>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<!-- End Our Materials -->