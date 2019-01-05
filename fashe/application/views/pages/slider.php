
	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?php echo base_url(); ?>assets/images/heading-pages-06.jpeg);">
		<h2 class="l-text2 t-center">
			Slider
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-60 p-b-25">
		<div class="container">
			<div class="row">
				<div class="col-md-12 p-b-80">
					<div class="p-r-50 p-r-0-lg">
						<div class="p-b-40">
							<div class="blog-detail-img wrap-pic-w">
								<img src="<?php echo base_url(); ?>assets/images/slides/<?php echo $slider['slider_image']; ?>" alt="IMG-BLOG">
							</div>

							<div class="blog-detail-txt p-t-33">
								<h4 class="p-b-11 m-text24">
									<?php echo $slider['slider_name']; ?>
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										By Admin
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										<?php echo $slider['created_at']; ?>
									</span>
								</div>

								<p class="p-b-25">
									<?php echo $slider['slider_body']; ?>
								</p>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>