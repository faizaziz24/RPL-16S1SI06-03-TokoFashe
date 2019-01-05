<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?php echo base_url(); ?>assets/images/heading-pages-06.jpeg);">
	<h2 class="l-text2 t-center">Login</h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
	<div class="container">
		<div class="row">
			<div class="col-md-6 p-b-30">
				<h4 class="m-text26 p-b-36 p-t-15">Why you will love Fashe</h4>

				<p class="p-b-28">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>

			<div class="col-md-6 p-b-30">
				<?php echo form_open('customers/login'); ?>
					<h4 class="m-text26 p-b-36 p-t-15">Login</h4>

					<!-- Flash messages -->
				    <?php if($this->session->flashdata('customer_registered')): ?>
				        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('customer_registered').'</p>'; ?>
				    <?php endif; ?>

					<!-- Flash messages -->
				    <?php if($this->session->flashdata('login_failed')): ?>
				        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
				    <?php endif; ?>

					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address">
					</div>

					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password" placeholder="Password">
					</div>
					<div class="w-size25">
						<!-- Button -->
						<button type="submit" value="Login" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
							Login
						</button>
					</div>
				<?php echo form_close(); ?>

				<?php echo validation_errors(); ?>
			</div>
		</div>
	</div>
</section>